<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function specials()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'specials',
        ];
        return view('frontend.special.specials' , $binding);
    }
    public function specialContent()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'specialContent',
        ];
        return view('frontend.special.specialContent' , $binding);
    }
    
}
