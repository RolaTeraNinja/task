<?php

namespace models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

class Pharmacy extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'pharmacies';
    public $timestamps = true;
    protected $guard = 'pharmacy';

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'logo', 'address', 'phone');
    protected $hidden = array('password','remember_token');

}