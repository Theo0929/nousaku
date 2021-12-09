<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'news',
        ];
        return view('frontend.news.news' , $binding);
    }
    public function newsDetails()
    {
        //
        $binding = [
            'path' => 'home',
            'result' => 'newsDetails',
        ];
        return view('frontend.news.newsDetails' , $binding);
    }
   
    
}
