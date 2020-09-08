<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
  public function categoryWiseProductAndImage()
  {
    
    $product = Product::get()->first();
    print_r($product->category->category_name);
    echo "<br>";

    $products = Product::get();
    foreach ($products as $key => $product) {
         echo "<pre>";
         print_r($product->category->category_name);
        } 

     echo "<br>";   

    $categories = Category::get();
    foreach ($categories as $key => $category) {
        foreach ($category->products as $key => $product) {
         echo "<pre>";
         print_r($product->product_image);
     }
 }




}
}
