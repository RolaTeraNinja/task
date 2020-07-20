<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;
use App\Models\DoctorServices;
use App\Repositories\DoctorServiceRepository;
use Illuminate\Http\Request;
use App\Models\service;


class Doctor_Services
{
	public function __construct(DoctorServiceRepository $docservices)
	{
		$this->docservices = $docservices;
	}

	public function index()
	{
		return $this->docservices->all();
	}

    public function create(Request $request)
	{
       
		$attributes = $request->all();
    	return $this->docservices->create($attributes);
	}
	
	

	public function read($id)
	{
     return $this->docservices->find($id);
	}

	public function update(Request $request, $id)
	{
	  $attributes = $request->all();
	  
      return $this->docservices->update($id, $attributes);
	}

	public function delete($id)
	{
      return $this->docservices->delete($id);
	}
}