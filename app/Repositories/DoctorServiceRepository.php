<?php

namespace App\Repositories;

use App\Models\DoctorServices;
use Illuminate\Support\Facades\DB;
class DoctorServiceRepository
{
  
  protected $docservices;

  public function __construct(DoctorServices $docservices)
  {
    $this->docservices = $docservices;
  }
  
  public function create($attributes)
  
  {
  
    return $this->docservices->create($attributes);
  }
  
  public function all()
  {
    return $this->docservices->all();
  }

  public function find($id)
  {
   return $this->docservices->find($id);
  }
  
  public function update($id, array $attributes)
  {
  return $this->docservices->find($id)->update($attributes);
  }
 
  public function delete($id)
  {
   return $this->docservices->find($id)->delete();
  }
}