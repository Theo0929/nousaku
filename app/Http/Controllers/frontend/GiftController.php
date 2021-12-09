<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gifts()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'gifts',
        ];
        return view('frontend.gift.gifts' , $binding);
    }
        
}
