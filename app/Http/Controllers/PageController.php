<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function portfolio()
    {
    	return view('portfolio');
    }

    public function portfolio_cb()
    {
        return view('portfolio.commentboard');
    }

    public function portfolio_pp()
    {
        return view('portfolio.personalpage');
    }


    public function posts()
    {
    	return view('post');
    }
}
