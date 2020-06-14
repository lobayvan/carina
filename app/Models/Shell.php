<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Shell extends Model
{
    protected $table = "shells";
    protected $fillable = [
    	'url',
        'server_info',
        'status'
    ];
}
