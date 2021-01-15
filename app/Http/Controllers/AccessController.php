<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\adminLogin;
use App\userLogin;
use App\address;
use Illuminate\Support\Str;
use DB;
class AccessController extends Controller
{
    public function UserInsert(Request $request)
   {
       $login = new userLogin();
       $login-> username = $request->input('username');
       $login-> password = $request->input('password');
       $login-> save();
       return view('hlogin');
   }
   public function AdminInsert(Request $request)
   {
       $login = new adminLogin();
       $login-> username = $request->input('username');
       $login-> password = $request->input('password');
       $login-> save();
       return view('adminlogin');
   }
    public function login(Request $request)
    {
        $uname = $request->input('username');
        $password = $request->input('password');
 
        $con = DB::table('admin_login')->where('username',$uname)->first();
        if(is_null($con)){
            return view('home');
        }
        else{
            if($con->username == $uname && $con->password == $password){
                $request->session()->put('adminname',$con->username);
                $request->session()->put('userid',$con->id);
               
                return view('adminhome');
            }else{
                return view('wrongpwd');
            }
         }
        
}
public function ulogin(Request $request)
    {
        $uname = $request->input('contact');
        $password = $request->input('security');
        $con = DB::table('user_login')->where('username',$uname)->first();
        if(is_null($con)){
            return redirect()->back() ->with('alert', 'Email or Password is Incorrect');
        }
        else{
            if($con->username == $uname && $con->password == $password){
                $request->session()->put('username',$con->username);
                $request->session()->put('userid',$con->id);
                $address = address::all();
                return view('/checkout')->with('address',$address);
            }else{
                return redirect()->back() ->with('alert', 'Email or Password is Incorrect');
            }
         }
        
}
public function hlogin(Request $request)
    {
        $uname = $request->input('contact');
        $password = $request->input('security');
        
        $con = DB::table('user_login')->where('username',$uname)->first();
        if(is_null($con)){
            return redirect()->back() ->with('alert', 'Email or Password is Incorrect');
        }
        else{
            if($con->username == $uname && $con->password == $password){
                $request->session()->put('username',$con->username);
                $request->session()->put('userid',$con->id);
                return view('project');
            }else{
                return redirect()->back() ->with('alert', 'Email or Password is Incorrect');
            }
         }
        
}
public function setToken(Request $request){
    $uname = $request->input('uname');
    $con = DB::table('user_login')->where('username',$uname)->first();
    $id = $con->id;
    $password = $request->input('passcode');
    $security = $request->input('fullcode');
    if($password==$security){
    $setpsd = userLogin::find($id);
    $setpsd-> password = $request->input('passcode');
    $setpsd->save();
    return redirect('hlogin')->with('alert', 'Set New Password Successfully!');;
    }else{
        return redirect()->back() ->with('alert', 'Passwords do not match');
    }

}


public function adrsave(Request $request){
    $address = new address();
    $address-> name = $request->input('fname');
    $address-> address1 = $request->input('adrs1');
    $address-> address2 = $request->input('adrs2');
    $address-> pincode = $request->input('pincode');
    $address->save();
    return redirect ('cart');
}
public function logout(Request $request){
    $request->session()->flush();
    $request->session()->regenerate();
    return view('userlogin');
   }
}
