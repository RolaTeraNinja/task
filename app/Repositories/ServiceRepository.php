<?php

namespace App\Repositories;

use App\Models\Service;
use App\Helpers\FileHelper;
class ServiceRepository
{
  
  protected $services;

  public function __construct(Service $services)
  {
    $this->services = $services;
  }
  
  public function create($attributes)
  {
     
    return $this->services->create($attributes);
 
  }
  
  public function all()
  {
    return $this->services->all();
  }

  public function find($id)
  {
   return $this->services->find($id);
  }
  
  public function update($id, array $attributes)
  {
  return $this->services->find($id)->update($attributes);
  }
 
  public function delete($id)
  {
   return $this->services->find($id)->delete();
  }
}