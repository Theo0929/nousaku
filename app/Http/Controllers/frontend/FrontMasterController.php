<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontMasterController extends Controller
{
    public function topMenu2()
    {
        return view('frontend.layouts.topMenu2');
    }
    
}
