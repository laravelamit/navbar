<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function contacts(){
        return view('pages.contacts');
    }

    public function courses(){
        return view('pages.courses');
    }
}
