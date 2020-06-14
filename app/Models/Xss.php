<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xss extends Model
{
    protected $table = "xss";
    protected $fillable = [
        'domaine',
        'url',
        'commentaire',
        'status'
    ];

}
