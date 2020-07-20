<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Service extends Model
{
    use SoftDeletes;

    protected $table = 'services';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'logo');
    public function doctorservices(){
        return $this->hasMany(DoctorServices::class);
  
    }
}
