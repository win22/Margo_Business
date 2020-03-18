<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function ebooks()
    {
        request()->validate([
           'name' => ['required', 'max: 100'],
           'email' => ['required', 'max: 191', 'unique:infos', 'email'],
           'phone' => ['required', 'max: 100'],
           'message' => ['required', ]
        ]);

        info::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'categorie' => "Ce message provient de la page d'acceuil du site",
            'status' => 0
        ]);

        return dump("c'est passé");

    }
}
