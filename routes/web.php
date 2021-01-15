<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('adminlogin');
});
Route::get('/find', function () {
    return view('search/default');
});
Route::get('/uadd', function () {
    return view('useradd');
});
Route::get('/admadd', function () {
    return view('admadd');
});
Route::get('/ulogin', function () {
    return view('userlogin');
});
Route::get('/hlogin', function () {
    return view('hlogin');
});
Route::get('/forgetpwd', function () {
    return view('forgetpwd');
});
Route::get('/clothing', function () {
    return view('clothing');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/paypal', function () {
    return view('paypal');
});
Route::get('/placed', function () {
    return view('success');
});


Route::get('/sum/{id}', 'ProductController@ProdDetails');
Route::get('/cloth/{id}', 'ProductController@ClothDetails');
Route::get('/home', 'CartController@ViewHome');
Route::get('/add_img/{id}','ProductController@add_img');
Route::get('/add_pic/{id}','ProductController@add_pic');
Route::get('/add_jpg/{id}','ProductController@add_jpg');
Route::post('/add_img','ProductController@update_specs');
Route::post('/add_pic','ProductController@image_add');
Route::post('/add_jpg','ProductController@update_img');


Route::post('search', 'SearchController@findme');

Route::get('/tees','filterController@ViewTsh');
Route::get('/jacket','filterController@ViewJkt');
Route::get('/shirt','filterController@ViewSrt');
Route::get('/novel','filterController@ViewNvl');
Route::get('/fiction','filterController@ViewFtn');
Route::get('/thriller','filterController@ViewTrl');
Route::get('/reference','filterController@ViewRfr');
Route::get('/laptop','filterController@ViewLpt');
Route::get('/smartphone','filterController@ViewSph');
Route::get('/accessories','filterController@ViewAsr');

Route::get('/lth','filterController@Sortlth');
Route::get('/htl','filterController@Sorthtl');
Route::get('/lowtohigh','filterController@LowtoHigh');
Route::get('/hightolow','filterController@HightoLow');
Route::get('/ascend','filterController@Ascend');
Route::get('/descend','filterController@Descend');



Route::post('/add_adrs','AccessController@adrsave')->name('add_address');
Route::get('/cartcln', 'CartController@cartCln');
Route::get('/wshlcln', 'ProductController@wshlCln');
Route::get('/cart', 'ProductController@cartView');
Route::get('/checkout', 'ProductController@CheckoutView');
Route::post('/add_user','AccessController@UserInsert')->name('add_user');
Route::post('/add_admin','AccessController@AdminInsert')->name('add_admin');
Route::post('/enter_admin','AccessController@login');
Route::post('/user_action','AccessController@ulogin');
Route::post('/home_action','AccessController@hlogin');
Route::get('/logout', 'AccessController@logout');
Route::post('/setToken','AccessController@setToken');
Route::get('/productinsert','ProductController@ProductInsert');
Route::get('/specinsert','ProductController@SpecInsert');
Route::post('/add_product','ProductController@store')->name('add_product');
Route::post('/add_specs','ProductController@store_specs')->name('add_specs');
Route::post('/update_product','ProductController@prod_update');
Route::get('/productedit','ProductController@AllProducts');
Route::get('/products','ProductController@ViewProducts');
Route::get('/wishlist','ProductController@ViewWishlist');
Route::get('/fsnproducts','ProductController@ViewFashion');
Route::get('/books','ProductController@ViewBooks');
Route::get('/gadgets','ProductController@ViewGadgets');
Route::get('/edit_product/{id}','ProductController@prod_edit');
Route::get('/delete_product/{id}','ProductController@prod_delete');
Route::get('/del_fromcart/{id}','CartController@cart_delete');
Route::post('update_product/','ProductController@prod_update');
Route::get('/add_tocart/{id}','CartController@cart_add');
Route::get('add_towshl/{id}','ProductController@wshl_add');
Route::get('/viewcart', 'CartController@ViewCart');
