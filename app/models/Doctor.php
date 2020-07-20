<?php

namespace App\models;
 
use Illuminate\Database\Eloquent\SoftDeletes;
 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{

    use Notifiable;
    use SoftDeletes;
    protected $table = 'doctors';
    public $timestamps = true;

    protected $guard = 'doctor';

 
    protected $dates = ['deleted_at'];
    protected $fillable = array('first_name', 'last_name', 'phone', 'image', 'address', 'description', 'department_id', 'birth_date', 'gender', 'Qr_code', 'activation_code');

    protected $hidden = array('password','remember_token');
    public function doctor_services(){
        return $this->hasMany(DoctorServices::class);
  
    }

}