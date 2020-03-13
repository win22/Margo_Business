<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function blogs()
    {
        return view('site.blog');
    }

    public function formations()
    {
        return view('site.catalogue.formation');
    }

    public function coachings()
    {
        return view('site.catalogue.coach');
    }

    public function consultings()
    {
        return view('site.catalogue.consult');
    }

    public function evenementiels()
    {
        return view('site.catalogue.evenementiel');
    }

    public function abouts()
    {
        return view('site.about');
    }

    public function contacts()
    {
        return view('site.contact');
    }

    public function logins()
    {
        return view('site.login');
    }
}
