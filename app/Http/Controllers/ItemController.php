<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'category'=>'required|category|string|max:255',
            'price'=>'required|price|string|max:255'
        ]);
        $item =Auth::item();
        $item->name = $request['name'];
        $item->category = $request['category'];
        $item->price = $request['price'];
        $item->save();
        //return back()->with('message','Item atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item = Item::where('id', $item->id)->pluck('id');
        Item::whereIn('category', $item->category)->delete();
        Item::whereIn('name', $item->name)->delete();
        Item::whereIn('price', $item->price)->delete();
        Item::where('item_id', $item->item_id)->delete();
        $item->delete();
    }
}