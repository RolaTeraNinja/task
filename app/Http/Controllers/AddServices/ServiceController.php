<?php

namespace App\Http\Controllers\AddServices;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\ServiceRequest;
use App\Services\Services;

class ServiceController 
{ 
	protected $services;

	public function __construct(Services $service)
	{
		$this->service = $service;
	}
    public function index(){
       
    $services = $this->service->index();
     
    return view('index', compact('services'));
    }

    public function create(ServiceRequest $request)
    {
      
      $this->service->create($request);

      return back()->with(['status'=>'data created successfully']);
    }

    public function read($id)
    {
       
       $services = $this->service->read($id);

       return view('edit', compact('services'));

    }

    public function update(ServiceRequest $request, $id)
    {

       $services = $this->service->update($request, $id);

     return redirect()->back()->with('status', 'data has been updated succesfully');
    }

    public function delete($id)
    {
     $this->service->delete($id);

     return back()->with(['status'=>'Deleted successfully']);
    }
}