<?php

namespace App\models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sister extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'sisters';
    public $timestamps = true;
    protected $guard = 'sister';

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'logo', 'address', 'phone');
    protected $hidden = array('password','remember_token');

}
