<?php

namespace models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class XrayCenter extends Authenticatable
{   
    use Notifiable;
    use SoftDeletes;
     
    protected $table = 'xray_centers';
    public $timestamps = true;
    protected $guard = 'xray_center';

  

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'logo', 'address', 'description', 'phone');
    protected $hidden = array('password','remember_token');

}