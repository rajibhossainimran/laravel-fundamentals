<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'infos';
    protected $fillable = [
        'age',
        'user_id',
        'gender',
        'phone',
        'address',
    ];
}
