<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('public/index');
    }

    public function about(){
        return view('public/about');
    }

    public function contact(){
        return view('public/contact');
    }
    public function product(){
        $products = Products::latest()->paginate(5);

        return view('public/product', compact('products'));
    }

    // public function product_details(){
    //     return view('public/productdetails');
    // }
    public function product_details($id){
        $product = Products::findOrFail($id);
        return view('public/productdetails', compact('product'));
    }
}
