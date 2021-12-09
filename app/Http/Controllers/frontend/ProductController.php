<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'products',
        ];
        return view('frontend.product.products' , $binding);
    }
    public function productsAll()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'products',
        ];
        return view('frontend.product.productsAll' , $binding);
    }
    public function productsNew()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'products',
        ];
        return view('frontend.product.productsNew' , $binding);
    }
    public function productsDetails()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'products',
        ];
        return view('frontend.product.productsDetails' , $binding);
    }
}
