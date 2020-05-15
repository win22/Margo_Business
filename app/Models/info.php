<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    protected $fillable = ['name', 'email','phone', 'message', 'categorie', 'status'];
}
