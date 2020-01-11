<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',      
        'password',
    ];
}
