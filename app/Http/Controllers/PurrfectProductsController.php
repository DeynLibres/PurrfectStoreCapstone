<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurrfectProducts;

class PurrfectProductsController extends Controller
{
   public function index(){
        $purrfect_products = PurrfectProducts::all();
        return view('products', compact('purrfect_products'));
   }
   public function cart(){
    return view('cart');
   }

   public function addToCart($id)
   {
    $purrfect_products = PurrfectProducts::findOrFail($id);

    $cart = session()->get('cart', []);

    if(isset($cart[$id])){
        $cart[$id]['quantity']++;
        
    }else{
        $cart[$id] = [
            "product_name" => $purrfect_products->product_name,
            "product_img" => $purrfect_products ->product_img,
            "product_price" =>$purrfect_products->product_price,
            "quantity" => 1
        ];
    }

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product add to cart successfully!');
   }

   public function remove(Request $request)
   {
    if($request->id){
        $cart= session()->get('cart');
        if(isset($cart[$request->id])){
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Product successfully removed');
    }
    
   }
}
