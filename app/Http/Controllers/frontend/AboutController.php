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
    public function about1()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'about1',
        ];
        return view('frontend.about.about1' , $binding);
    }
    public function about2()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'about2',
        ];
        return view('frontend.about.about2' , $binding);
    }
    public function about3()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'about3',
        ];
        return view('frontend.about.about3' , $binding);
    }
    
}
