<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Response;

class HomeController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function account()
    {
        $u = Auth::user();
        $data = Item::where('id', $u->id)->get();
        return view('adminHome', ['data' => $data]);
    }

    public function create(){
        $user = Auth::user();
        return view('create');
    }

    public function createNew(Request $request){

        $user = Auth::user();

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->createItem($request->all())));

        $this->guard()->login(Auth::user());

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return redirect($this->redirectPath())->with('success', 'Your item was added Succefully!');
    }   

    public function itemHome(){
        return view('item');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required','max:30'],
            'category' => ['required','regex:/^(Art|Collectibles|Electronics|Fashion|Home and Garden|Music|Office Supplies|Sports|Other)$/'],
            'price' => ['required','min:0.00'],
        ]);
    }

    protected function createItem(array $data)
    {   
        $user = Auth::user();
        return Item::create([
            'name' => $data['name'],
            'category' => $data['category'],
            'id' => $user['id'],
            'price' => $data['price'],
        ]);
    }
    public function edit_item(Request $request){
        $item = Item::where('item_id', $request->item_id)->first();
        return view('edit',['item' => $item]);
    }
    public function edit(Request $request){
        $u = Auth::user();
        $item=Item::where('item_id', $request->item_id)->first();
        $item->name = $request->name;
        $item->category = $request->category;
        $item->price = $request->price;
        $item->save();
        $data = Item::where('id', $u->id)->get();
        return view('adminHome', ['data' => $data])->with('success', 'Update!');
    }
}
