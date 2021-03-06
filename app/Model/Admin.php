<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admins';
    protected $fillable=[
        'username',
        'email',
        'address',
        'image',
        'password'
    ];
}
