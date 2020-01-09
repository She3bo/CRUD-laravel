<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class productController extends Controller
{
    public function insert()
    {
        return view('/product');
    }
    public function save(Request $request)
    {
        $product = new product();
        // echo '<pre>';
        // var_dump($product);
        // echo '<pre>';
        $product->productName = $request->input('p_name') ;
        $product->productPrice = $request->input('p_price') ;
        $product->productDescription = $request->input('p_desc') ;        
        
        $product->save();
        return redirect("/read");


    }
    public function read(){
         $products = product::all();
         return view("/showProducts",['products' => $products]);
        //  foreach($products as $product)
        //          echo $product->productName;
        //  echo '<pre>';
        //  var_dump($products);
        //  echo '<pre>';
        //  //return $products->productPrice;
    }
    public function edit(){
        
    }
}
