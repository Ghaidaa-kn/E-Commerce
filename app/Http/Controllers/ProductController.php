<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Product;
use App\Cart;
use App\Order;
use App\User;
use Session;

class ProductController extends Controller
{
    //
    function index(){
    	$data = Product::all();
        $categories = Product::select('category')
        ->distinct()->get();
    	return view('product' , ['products'=>$data ,
         'categories'=>$categories]);
    }

    function detail($id){
    	$data = Product::find($id);
    	return view('detail' , ['product'=>$data]);
    }

    function search(Request $req){
    	$data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
    	return view('search' , ['results'=>$data]);
    }

    function AddToCart(Request $req){
    	if($req->session()->has('user')){
    		$cart = new Cart;
    		$cart->user_id = $req->session()->get('user')['id'];
    		$cart->product_id = $req->product_id;
    		$cart->save();
    		return redirect('/');
    	}else{
    		return redirect('/login');
    	}
    }

    static function cartItem()
    {
    	$userId = Session::get('user')['id'];
    	return Cart::where('user_id' , $userId)->count();
    }

    function cartList(){
    	$userId = Session::get('user')['id'];
    	$data = DB::table('cart')
    	->join('products' , 'cart.product_id' , '=' , 'Products.id')
    	->where('cart.user_id' , $userId)
    	->select('products.*' , 'cart.id as cart_id')
    	->get();
        $number = DB::table('cart')
        ->join('products' , 'cart.product_id' , '=' , 'Products.id')
        ->where('cart.user_id' , $userId)->count();
    	return view('cartList' , ['products'=>$data , 'count'=>$number]); 
    }

    function removeCart($id){
    	Cart::destroy($id);
    	return redirect('cartList');
    }

    function orderNow(){
    	$userId = Session::get('user')['id'];
    	$total = DB::table('cart')
    	->join('products' , 'cart.product_id' , '=' , 
            'Products.id')
    	->where('cart.user_id' , $userId)
    	->sum('products.price');
    	return view('orderNow' , ['total'=>$total]);
    }

    function orderPlace(Request $req){
    	$userId = Session::get('user')['id'];
    	$allcart = Cart::where('user_id' , $userId)->get();
    	foreach($allcart as $cart){
        $cart_points = DB::table('cart')
            ->join('products' , 'cart.product_id' , '=' , 
                'products.id')
            ->where('products.id' , $cart->product_id)
            ->select('products.points as points')
            ->first()->points;
        $user_points = User::where('id' , $userId)
            ->select('points')->first()->points;
        $new_points = $cart_points + $user_points;
        DB::update('update users set points = ? where id = ?',[$new_points ,$userId]);
    		$order = new Order;
    		$order->user_id = $userId;
    		$order->product_id = $cart->product_id;
    		$order->status = "pending";
    		$order->payment_method = $req->payment;
    		$order->payment_status = "pending";
    		$order->address = $req->address;
    		$order->save();
    	}
        Cart::where('user_id' , $userId)->delete();
    	$req->input();
    	return redirect('/');
    }

    function myOrders(){
    	$userId = Session::get('user')['id'];
    	$orders = DB::table('orders')
    	->join('products' , 'orders.product_id' , '=' , 'products.id')
    	->where('orders.user_id' , $userId)
    	->get();
    	return view('myOrders' , ['orders'=>$orders]);
    }


    function buyNow($id){
        $total = Product::where('id' , $id)
        ->select('price')->first()->price;
        $id = Product::where('id' , $id)
        ->select('id')->first()->id;
        return view('orderOne' , ['total'=>$total ,
         'id'=>$id]);
    }

    function orderOne(Request $req , $id){
        if($req->session()->has('user')){
            $userId = Session::get('user')['id'];

            $product_points = Product::where('id' ,
            $id)->select('points')->first()->points;

            $user_points = User::where('id' , $userId)
                ->select('points')->first()->points;
            $new_points = $product_points + $user_points;
            DB::update('update users set points = ? where id = ?',[$new_points ,$userId]);

            $order = new Order;
            $order->user_id = $userId;
            $order->product_id = $id;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();

            return redirect('/');

        }else{
            return redirect('/login');
        }
    }




//Admin

     function addProduct(Request $req){
        $product = new Product;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->gallery = $req->gallery;
        $product->points = $req->points;
        $product->replace_points = $req->replace_points;
        $product->save();
        return redirect('/admin');
    }

    function removeProduct($id){
        Cart::where('cart.product_id', $id)->delete();
        Product::destroy($id);
        //$this->removeCart($cart);
        
        return redirect('/admin');
    }

    function editProduct($id){
        $product = Product::find($id);
        return view('editProduct' , ['product'=>$product]);
    }

    function updateProduct(Request $req , $id){
        $product = Product::find($id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->gallery = $req->gallery;
        $product->points = $req->points;
        $product->replace_points = $req->replace_points;
        $product->save();
        return redirect('/admin');
    }



    function showGifts(){
        $userId = Session::get('user')['id'];
        $user_points = User::where('id' , $userId)
            ->select('points')->first()->points;
        $gifts = Product::where('replace_points' , '<=' ,
            $user_points)->get();
        return view('gifts' , ['gifts'=>$gifts , 'points'=>$user_points]);
    }

    function replaceGift(Request $req , $id){
        $userId = Session::get('user')['id'];
        $user_points = User::where('id' , $userId)
        ->select('points')->first()->points;
        $replaced_points = Product::Where('id' , $id)
        ->select('replace_points')->first()->replace_points;
        $new_points = $user_points - $replaced_points;
        DB::update('update users set points = ? where id = ?',[$new_points ,$userId]);
        $order = new Order;
        $order->product_id = $id;
        $order->user_id = $userId;
        $order->status = "pending";
        $order->payment_method = "cash";
        $order->payment_status = "pending";
        $order->address = $req->address;
        $order->save(); 
        return redirect('/gifts');
    }


    function getByCategory($category){
        $items = Product::where('category' , $category)
        ->select('products.*')->get();
         return view('categoryProducts' , ['items'=>$items]);
    }



}
