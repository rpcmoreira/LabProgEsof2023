<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function products(Request $request)
    {
        /*if($request->has('localization')){
            $user = DB::table('items')->join('users', 'items.user_id', '=', 'users.user_id')->where('user.localization', $request->localization);
        }
        else*/ 
        if($request->has('category')){
            $user = Item::where('category', $request->category)->paginate(28);
            return view('prodList', ['user' => $user]);
        }
        else $user = Item::paginate(28);
        return view('prodList', ['user' => $user]);
    }
    
    public function show(Request $request){ // Passamos formulario
        $user = Item::where('item_id', $request->item_id)->first();
        //dump($user);
        return view('item', ['user' => $user]);
    }
    
}
