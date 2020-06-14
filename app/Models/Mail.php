<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = "mails";
    protected $fillable = [
        'username',
        'password',
        'comment',
        'status'
    ];
}
