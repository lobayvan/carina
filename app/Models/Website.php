<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $table = "websites";
    protected $fillable = [
        'url',
        'username',
        'password',
        'commentaire',
        'status'
    ];
}
