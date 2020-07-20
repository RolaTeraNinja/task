<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DoctorServices extends Model
{
    use SoftDeletes;

    protected $table = 'doctor_services';
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $fillable = array('price', 'service_id','doctor_id');
    public function service()
    {
    	return $this->belongsTo('App\Models\Service');
    }
    public function doctor()
    {
    	return $this->belongsTo('App\Models\Doctor');
    }
}
