<?php
namespace App\models;
 

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'patients';
    public $timestamps = true;
    protected $guard = 'patient';

   

    protected $dates = ['deleted_at'];
    protected $fillable = array('first_name', 'image', 'phone','birth_date', 'last_name');

    protected $hidden = array('password','remember_token');

}