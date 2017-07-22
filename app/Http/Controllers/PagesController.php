<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to the Bowman Corporation Blog!!!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function blog() {
        $title = 'Blog Page';
        return view('pages.blog')->with('title', $title);
    }

    public function contact() {
        $title = 'Contact Us';
        return view('pages.contact')->with('title', $title);
    }

     public function login() {
        $title = 'Login';
        return view('pages.login')->with('title', $title);
    }

     public function register() {
        $title = 'Register';
        return view('pages.register')->with('title', $title);
    }





}
