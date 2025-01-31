<?php

namespace App\Http\Controllers;

use App\Models\tentang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title=tentang::first();
        
        return view('front/index');
    }
}