<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $table = "shell";
    protected $fillable = [
        'url',
        'server_info',
        'status'
    ];
}
