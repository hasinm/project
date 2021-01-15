<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\ProductModel;
use App\cart;
use App\Specifications;
use App\images;
use App\address;
use Illuminate\Support\Str;
use DB;
class ProductController extends Controller
{
    public function ViewHome()
    {
        $count = cart::count();
        return view('project')->with('count',$count);
    }
    public function ViewSum()
    {
        $total = cart::sum();
        return view('cart')->with('total',$total);
    }
    
    public function ProductInsert()
    {
        return view('productinsert');
    }
    public function store(Request $request){
    $product = new ProductModel();
    $product-> s_categoryName = $request->input('scname');
    $product-> product_name = $request->input('pname');
    
    /*image upload*/
    if($request->hasFile('fileToUpload')){
        $file = $request->file('fileToUpload');
        $extension = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $file->move($destinationPath,$extension);
        $product->product_image=$extension;
    }
   else{
       $product->product_image='';
   }
   $product-> product_price = $request->input('pprice');
   $product->save();
   return view('productinsert');
}

    public function SpecInsert()
    {
        return view('addspecs');
    }
    public function store_specs(Request $request){
        $prodspecs = new specifications();
        $prodspecs-> product_name = $request->input('pname');
        $prodspecs-> specifications = $request->input('specs');
        $request->session()->put('prodspecs',$prodspecs-> specifications);
        $prodspecs->save(); 
        $addpics = new images();
        $addpics-> product_name = $request->input('pname');
        if($request->hasFile('primg1')){
            $file1 = $request->file('primg1');
            $extension1 = time().'.'.$file1->getClientOriginalExtension();
            $destinationPath1 = public_path('/uploads');
            $file1->move($destinationPath1,$extension1);
            $addpics->productimg1=$extension1;
        }
       else{
        $addpics->productimg1='';
       } 
       if($request->hasFile('primg2')){
        $file2 = $request->file('primg2');
        $extension2 = time().'.'.$file2->getClientOriginalExtension();
        $destinationPath2 = public_path('/uploads');
        $file2->move($destinationPath2,$extension2);
        $addpics->productimg2=$extension2;
    }
   else{
    $addpics->productimg2='';
   }  
   if($request->hasFile('primg3')){
    $file3 = $request->file('primg3');
    $extension3 = time().'.'.$file3->getClientOriginalExtension();
    $destinationPath3 = public_path('/uploads');
    $file3->move($destinationPath3,$extension3);
    $addpics->productimg3=$extension3;
}
else{
$addpics->productimg3='';
}   
       $addpics->save();       
        return view('addspecs');
    }

public function update_img(Request $request){
    $id = $request->input('id');
    $addpics = images::find($id);
    $addpics-> product_name = $request->input('pname');
        if($request->hasFile('primg1')){
            $file1 = $request->file('primg1');
            $extension1 = time().'.'.$file1->getClientOriginalExtension();
            $destinationPath1 = public_path('/uploads');
            $file1->move($destinationPath1,$extension1);
            $addpics->productimg1=$extension1;
        }
       else{
        $addpics->productimg1='';
       }     
   return view('adminlogin');
   }


public function update_specs(Request $request){
    $id = $request->input('id');
    $addpics = images::find($id);
    $addpics-> product_name = $request->input('pname');
   if($request->hasFile('primg2')){
    $file2 = $request->file('primg2');
    $extension2 = time().'.'.$file2->getClientOriginalExtension();
    $destinationPath2 = public_path('/uploads');
    $file2->move($destinationPath2,$extension2);
    $addpics->productimg2=$extension2;
}
else{
$addpics->productimg2='';
}
$addpics->save();      
return view('adminlogin');
}

public function image_add(Request $request){
    $id = $request->input('id');
    $addpics = images::find($id);
    $addpics-> product_name = $request->input('pname');
   if($request->hasFile('primg3')){
    $file3 = $request->file('primg3');
    $extension3 = time().'.'.$file3->getClientOriginalExtension();
    $destinationPath3 = public_path('/uploads');
    $file3->move($destinationPath3,$extension3);
    $addpics->productimg3=$extension3;
}
else{
$addpics->productimg3='';
}
$addpics->save();    
return view('adminlogin');
}

public function ProdDetails($id){
    $details = specifications::leftJoin('products', 'specifications.id', '=', 'products.id')
            ->select('products.*', 'specifications.specifications as product_details')
            ->where('products.id', '=', $id) 
            ->get();
    return view('products')->with('detail',$details);
}

public function ClothDetails($id){
    $details = specifications::leftJoin('img_tab', 'specifications.id', '=', 'img_tab.id')
            ->select('img_tab.*', 'specifications.specifications as product_details')
            ->where('img_tab.id', '=', $id) 
            ->get();
    return view('preview')->with('detail',$details);
}

public function AllProducts(Request $request){
    $product = ProductModel::all();
    return view('/productedit')->with('product',$product);
}
public function ViewProducts(Request $request){
    $products = ProductModel::all();
    return view('gallery')->with('product',$products);
}
public function ViewWishlist(Request $request){
    $username = $request->session()->get('username');
    $con = DB::table('user_login')->where('username',$username)->first();
    if(is_null($con)){
    $products = DB::table('usercart')->where('username', 'user')->get();
    }
    else{
        if($con->username == $username){
    $products = DB::table('usercart')->where('username', $con->username)->get();     
    return view('wishlist')->with('product',$products);
        }
    }
}

public function ViewFashion(Request $request){
    $products = DB::table('products')->where('s_categoryName','Fashion')->get();
    return view('clothing')->with('product',$products);
}
public function ViewBooks(Request $request){
    $products = DB::table('products')->where('s_categoryName','Books')->get();
    return view('books')->with('product',$products);
}
public function ViewGadgets(Request $request){
    $products = DB::table('products')->where('s_categoryName','Gadgets')->get();
    return view('gadgets')->with('product',$products);
}
public function prod_edit($id){
    $product = ProductModel::find($id);
    return view('/productupdate')->with('product',$product);
}
public function add_img($id){
    $product = images::find($id);
    return view('/specsedit')->with('product',$product);
}
public function add_pic($id){
    $product = images::find($id);
    return view('/picsadd')->with('product',$product);
}
public function add_jpg($id){
    $product = images::find($id);
    return view('/imageadd')->with('product',$product);
}
public function prod_delete($id){
    DB::table('products') ->where('id',$id)->delete();
    //$product  = ProductModel::find($id);
    //$product->delete();
    return redirect ('/productedit');
}
public function prod_update(Request $request){
    $id = $request->input('id');
    $product = ProductModel::find($id);
    $product-> s_categoryName = $request->input('scname');
    $product-> product_name = $request->input('pname');
    
    /*image upload*/
    if($request->hasFile('fileToUpload')){
        $file = $request->file('fileToUpload');
        $extension = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $file->move($destinationPath,$extension);
        $product->product_image=$extension;
    }
   else{
       $product->product_image='';
   }
   $product-> product_price = $request->input('pprice');
   $product->save();
   return redirect('productedit')->with('product',$product);
}
public function wshl_add(Request $request){
    $product = DB::table('products') ->where('id',$request->id)->first();
    $username = $request->session()->get('username');
    $pname = $product-> product_name;
    $pprice =  $product-> product_price;
    $con = DB::table('user_login')->where('username',$username)->first();
    if(is_null($con)){
    DB::table('usercart')->insert(
        ['username'=>'user','product_name'=>$pname,'product_price'=>$pprice]
    ); 
}
else{
    if($con->username == $username){
        DB::table('usercart')->insert(
            ['username'=>$username,'product_name'=>$pname,'product_price'=>$pprice]
        ); 
    }
}
    //$products = DB::table('usercart')->get();
    $count = cart::count();
    return view('/cart')->with('count',$count);
    
    
}
public function cartView(Request $request){
    $products = cart::all();
    $total = DB::table('usercart')->sum('product_price');
    $request->session()->put('sum',$total);
    return view('cart')->with('product',$products);
}
public function CheckoutView(){
    $address = address::all();
    return view('/checkout')->with('address',$address);
}
public function wshlCln(Request $request){
    $username = $request->session()->get('username');
    $con = DB::table('user_login')->where('username',$username)->first();
    if(is_null($con)){
    $cart_clean  = DB::table('usercart')->where('username', 'user')->delete();
    }
    else{
    if($con->username == $username){
    $cart_clean  = DB::table('usercart')->where('username', $username)->delete();
    }
    }
    return redirect ('cart');
}
public function cart_delete($id){
    $cart_delete  = cart::find($id);
    $cart_delete->delete();
    return redirect ('cart');
}
}
