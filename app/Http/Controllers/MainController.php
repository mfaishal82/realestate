<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showGalleries()
    {
        return view('galleries');
    }

    public function showCompany()
    {
        return view('company');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showProfiles()
    {
        return view('profiles');
    }
}
