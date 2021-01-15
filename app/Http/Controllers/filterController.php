<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\ProductModel;
use App\filter;
use DB;

class filterController extends Controller
{
    public function ViewTsh(Request $request){
        
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'T-Shirt')->get();
        return view('clothing')->with('product',$products);
    }
    public function ViewJkt(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Jacket')->get();
        return view('clothing')->with('product',$products);
    }
    public function ViewSrt(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Shirt')->get();
        return view('clothing')->with('product',$products);
    }
    public function ViewNvl(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Classics')->get();
        return view('books')->with('product',$products);
    }
    public function ViewFtn(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Fiction')->get();
        return view('books')->with('product',$products);
    }
    public function ViewTrl(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Thriller')->get();
        return view('books')->with('product',$products);
    }
    public function ViewRfr(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Reference')->get();
        return view('books')->with('product',$products);
    }
    public function ViewLpt(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'PC/Laptops')->get();
        return view('gadgets')->with('product',$products);
    }
    public function ViewSph(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Smartphones')->get();
        return view('gadgets')->with('product',$products);
    } 
    public function ViewAsr(Request $request){
        $products = filter::leftJoin('products', 'filter.id', '=', 'products.id')
        ->where('filter.sub_category', '=', 'Accessories')->get();
        return view('gadgets')->with('product',$products);
    } 
    public function Sortlth(Request $request){
        $products = DB::table('products')->orderBy('product_price', 'asc')
        ->where('s_categoryName', '=', 'Fashion')->get();
        return view('clothing')->with('product',$products);
    }
    public function Sorthtl(Request $request){
        $products = DB::table('products')->orderBy('product_price', 'desc')
        ->where('s_categoryName', '=', 'Fashion')->get();
        return view('clothing')->with('product',$products);
    }
    public function LowtoHigh(Request $request){
        $products = DB::table('products')->orderBy('product_price', 'asc')
        ->where('s_categoryName', '=', 'Books')->get();
        return view('books')->with('product',$products);
    }
    public function HightoLow(Request $request){
        $products = DB::table('products')->orderBy('product_price', 'desc')
        ->where('s_categoryName', '=', 'Books')->get();
        return view('books')->with('product',$products);
    }
    public function Ascend(Request $request){
        $products = DB::table('products')->orderBy('product_price', 'asc')
        ->where('s_categoryName', '=', 'Gadgets')->get();
        return view('gadgets')->with('product',$products);
    }
    public function Descend(Request $request){
        $products = DB::table('products')->orderBy('product_price', 'desc')
        ->where('s_categoryName', '=', 'Gadgets')->get();
        return view('gadgets')->with('product',$products);
    }
}
