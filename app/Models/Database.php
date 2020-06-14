<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $table = "databases";
    protected $fillable = [
        'type',
        'url',
        'username',
        'password',
        'port',
        'server_info',
        'connexion_externe',
        'commentaire',
        'status'
    ];
}
