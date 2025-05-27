<?php


namespace Modules\security\Services;


use App\Services\Services;

class PermisosService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Permisos');
   }

}

