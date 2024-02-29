<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function view($id){
      $product=  Products::find($id);
        return view('product',compact('product'));
    }

    public function add(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required',
            'price' => 'required',
            'qty' => 'required'
        ]);
       $product= new products;
    //    dd( var_dump($request->price));
        $product->name= $request->name;
        $product->description= $request->desc;
     
        $product->price=$request->price;
        $product->stock_quantity=$request->qty;
        $product->save();

        $product=  Products::get(); 
         
           
         
        return view('dashboard',compact('product'));
       
        

    }
}
