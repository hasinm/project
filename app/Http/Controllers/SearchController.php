<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Requests;

use App\ProductModel;

class SearchController extends Controller
{
    public function findme(Request $request){
        $q = $request->input('q');
        if($q != ""){
            $user = ProductModel::where('product_name','LIKE','%'.$q.'%')->orWhere('s_categoryName','LIKE','%'.$q.'%')->get();
            if(count($user)>0){
                return view('search/default')->withDetails ($user)->withQuery ($q);
            }
            return view('search/default')->withMessage ('No Details found. Try to search again !');
        }
    }
}
