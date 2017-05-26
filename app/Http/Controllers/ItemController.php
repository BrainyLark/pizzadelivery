<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Item;
use App\Type;
use App\Basket;
use Session;

class ItemController extends Controller
{
    public function pizza()
    {
    	$pizzas = Item::whereType(1)->orderBy('name')->paginate(5);
    	return view('items.pizza', compact('pizzas'));
    }

    public function snacks()
    {
    	$snacks = Item::whereType(2)->orderBy('name')->paginate(4);
    	return view('items.snacks', compact('snacks'));
    }

    public function beverages()
    {
    	$drinks = Item::whereType(3)->get();
    	return view('items.beverages', compact('drinks'));
    }

    public function addToBasket(Request $request, $id)
    {
        $item = Item::find($id);
        $oldBasket = Session::has('basket') ? Session::get('basket') : null;
        $basket = new Basket($oldBasket);
        $basket->add($item, $id);

        $request->session()->put('basket', $basket);
    }

    public function displayBasket(Request $request)
    {
        $myBasket = $request->session()->get('basket');
        return view('items.basket', compact('myBasket'));
    }

    public function removeFromBasket(Request $request, $key)
    {
        $oldBasket = Session::has('basket') ? Session::get('basket') : null;
        $basket = new Basket($oldBasket);
        $basket->remove($key);

        $request->session()->put('basket', $basket);
    }

    public function seeMySessionData(Request $request)
    {
        if(Session::has('basket')){
            $myBasket = $request->session()->get('basket');
            $myItems = $myBasket->items;
            foreach($myItems as $key => $itm){
                echo 'Бүтээгдхүүн ' . $key . " нь нийтдээ " . $itm['price'] . ' үнэтэй ба ' . $itm['qty'] . ' ширхэг сонгов! ' . "\t";
            }
            echo 'Уг сагсны сонголтоос нийт сонгосон бүтээгхүүний тоо ' . $myBasket->totalQty . ' ширхэг ба ' . $myBasket->totalPrice . ' нийт үнийн дүнтэй байна.';
        } else{
            echo "Odoogoor sessiond data alga bna!";
        }
    }
}
