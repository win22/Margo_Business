<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;
use App\Rules\Captcha;
use Mail;
class InfoController extends Controller
{
    public function ebooks()
    {
        request()->validate([
           'name' => ['required', 'max: 100'],
           'email' => ['required', 'max: 191', 'unique:infos', 'email'],
           'phone' => ['required', 'max: 100'],
           'message' => ['required', ],
            'g-recaptcha-response' => new Captcha(),
        ]);

        $info = info::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'categorie' => "Ce message provient de la page d'acceuil du site",
            'status' => 0
        ]);

        $data = array();
        $data['email'] = $info->email;
        $data['name'] = $info->name;

        Mail::send('mail.ebook', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->from('mailtrapmail@gmail.com');
            $message->subject('Lien de téléchargement du Ebook de Margo Business');
        });

        return dump("c'est passé");

    }
}
