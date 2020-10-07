<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel by din';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }


    public function about(){
        $title = 'About Us by din';
        return view('pages.about')->with('title', $title);
    }


    public function services(){
        $data = array(
            'title' => 'Services by din',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
