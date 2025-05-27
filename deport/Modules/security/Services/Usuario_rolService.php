<?php


namespace Modules\security\Services;


use App\Services\Services;

class Usuario_rolService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Usuario_rol');
   }

}

