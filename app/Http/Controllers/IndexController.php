<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class IndexController extends Controller
{
    public function index()
    {
       
        $images = Images::all(); 
        return view('home.index', compact('images'));
    }

    public function sukien()
    {
       
        $images = Images::all(); 
        return view('home.sukien', compact('images'));
    }

    public function xoay()
    {
       
        $images = Images::all(); 
        return view('home.xoay', compact('images'));
    }
}
