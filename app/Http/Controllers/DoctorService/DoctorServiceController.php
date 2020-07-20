<?php

namespace App\Http\Controllers\DoctorService;

use Illuminate\Http\Request;
use App\Models\DoctorServices;
use App\Models\Service;
use App\Http\Requests\DoctorServiceRequest;
use App\Services\Doctor_Services;
use Illuminate\Support\Facades\DB;

class DoctorServiceController 
{ 
	protected $doctor_services;

	public function __construct(Doctor_Services $doctor_services)
	{
		$this->doctor_services = $doctor_services;
	}
    public function index(){
       
    $doctorservices = $this->doctor_services->index();
     
    return view('doctorservices.index', compact('doctorservices'));
    }

    public function create(DoctorServiceRequest $request)
    {
    
     
      $this->doctor_services->create($request);
      return back()->with(['status'=>'data created successfully']);
    }

    public function read($id)
    {
       
       $doctorservices = $this->doctor_services->read($id);

       return view('/doctorservices.edit', compact('doctorservices'));

    }

    public function update(DoctorServiceRequest $request, $id)
    {

       $doctorservices = $this->doctor_services->update($request, $id);

     return redirect()->back()->with('status', 'data has been updated succesfully');
    }

    public function delete($id)
    {
     $this->doctor_services->delete($id);

     return back()->with(['status'=>'Deleted successfully']);
    }
}