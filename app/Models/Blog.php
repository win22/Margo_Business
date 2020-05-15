<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected  $fillable = [
        'name', 'slug', 'description', 'content', 'type', 'image' ,'status'
    ];

    //un blog n'appartient qu'a un seul utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
