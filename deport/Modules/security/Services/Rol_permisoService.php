<?php


namespace Modules\security\Services;


use App\Services\Services;

class Rol_permisoService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Rol_permiso');
   }

}

