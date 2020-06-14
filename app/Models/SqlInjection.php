<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SqlInjection extends Model
{
    protected $table = "sql_injections";
    protected $fillable = [
        'domaine',
        'sql_map_cmd',
        'commentaire',
        'status'
    ];

}
