<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('site.welcome')
            ->with('blogs', Blog::where('status', 1)->orderBy('created_at','DESC')->take(4)->get());
    }

    public function blogs()
    {
        return view('site.blog')
            ->with('blogs', Blog::where('status', 1)->orderBy('created_at','DESC')->paginate(12));
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
