<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\User;
use App\Product;
use App\Order;


class UserController extends Controller
{
    //
    function login(Request $req){
       $user = User::where('email' , $req->email)->first();

       if($user->email == "Admin@gmail.com" && Hash::check($req->password , $user->password)){

        return redirect('/dash');

       }else{

           if( !$user || !Hash::check($req->password , $user->password)){
             return "username or password is not matched ...";
           }else{
             $req->session()->put('user' , $user);
             return redirect('/');
         }
      }
    
    }

    function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->points = 0 ;
        $user->save();
        return redirect('/login');
    }

    // function adminIndex(){
    //     $statistics =  User::withCount('orderscount')->get();
    //     $products = Product::all();
    //     //return $statistics;
    //     return view('admin' , ['statistics'=>$statistics ,
    //         'products'=>$products]);
    // }

    function adminStatistics(){
        $statistics =  User::withCount('orderscount')->get();
        return view('statistics' , ['statistics'=>$statistics]);
    } 

    function adminProducts(){
        $products = Product::all();
        return view('products_ad' , ['products'=>$products]);
    }   

   
}
 


// $user =  DB::select('select * from users where email = ?',[$req->email]);

//$result = User::all()->where('email' , $req->email);


// $messages=User::all()->where('email' , 'gh.kneish@gmail.com');
     //    return response($messages);


// foreach ($users as $body) {
//         return $body->id;
//     }