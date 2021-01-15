<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;

use DB;

use App\ProductModel;


class CartController extends Controller
{
    public function cart_add(Request $res){
        $product = DB::table('products')->where('id',$res->id)->first();
        $add = Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'weight' => $product->product_price,
            'qty' => 1,

        ]);
        $total = Cart::total();
        return view('/cart');
    }
    public function cartCln(Request $request){
        Cart::destroy();
        return redirect ('cart');
    }
    public function cart_delete($rowId){
        
        Cart::remove($rowId);
       
        
        return redirect ('cart');
    }
    public function ViewHome()
    {
        $count = Cart::count();
        return view('project');
    }
    public function ViewSum()
    {
        $total = Cart::total();
        return view('cart')->with('total',$total);
    }
    public function ViewCart()
    {
        $data = Cart::content();
        return $data;
    }
}
