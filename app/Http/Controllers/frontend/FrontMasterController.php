<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class FrontMasterController extends Controller
{
    public function topMenu2()
    {
        $brandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        $categoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $binding = [
            'path' => 'home',
            'result' => 'products',
            'categoryList' => $categoryList,
            'brandList' => $brandList,
        ];
        return view('frontend.layouts.topMenu2' , $binding);
    }
    public function innerMenu2()
    {
        $brandList = DB::select('select * from product_brand where deleteflag = ?', array(0));
        $categoryList = DB::select('select * from product_category where deleteflag = ?', array(0));
        $binding = [
            'path' => 'home',
            'result' => 'products',
            'categoryList' => $categoryList,
            'brandList' => $brandList,
        ];
        return view('frontend.layouts.innerMenu2' , $binding);
    }

    public function FAQ()
    {

        $binding = [
            'path' => 'home',
            'result' => 'products',
        ];
        return view('frontend.info.FAQ' , $binding);
    }

    public function contact()
    {

        $binding = [
            'path' => 'home',
            'result' => 'products',
        ];
        return view('frontend.info.contact' , $binding);
    }
}
