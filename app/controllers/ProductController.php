<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController{

    public function index(){
        $products = Product::all();
        var_dump($products);
        die();
        echo 123;
        die();
        // $products->load('category');
        return $this->render('product.index', compact('products'));
    }


}

?>