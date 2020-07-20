<?php

namespace models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalLabs extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'medical_labs';
    public $timestamps = true;
    
    protected $guard = 'medical_lab';

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'logo', 'description', 'address', 'phone');
    protected $hidden = array('password','remember_token');

}