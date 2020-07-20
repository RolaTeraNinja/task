<?php

namespace App\Services;

use App\Models\Service;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use App\Helpers\FileHelper;

class Services
{
	public function __construct(ServiceRepository $services)
	{
		$this->services = $services;
	}

	public function index()
	{
		return $this->services->all();
	}

    public function create(Request $request)
	{
		if ($request->hasFile('logo')){
			$image_path = FileHelper::upload_file('/uploads/services/images'.$request->type,$request['logo']);
			$attributes = $request->all();
			$attributes['logo'] = $image_path;
		}else{
			$attributes = $request->all();
		}
		//dd($attributes);
    	return $this->services->create($attributes);
	}
	
	

	public function read($id)
	{
     return $this->services->find($id);
	}

	public function update(Request $request, $id)
	{
		if ($request->hasFile('logo')){
			$image_path = FileHelper::upload_file('/uploads/services/images'.$request->type,$request['logo']);
			$attributes = $request->all();
			$attributes['logo'] = $image_path;
		}else{
			$attributes = $request->all();
		}
	  
		
      return $this->services->update($id, $attributes);
	}

	public function delete($id)
	{
      return $this->services->delete($id);
	}
}