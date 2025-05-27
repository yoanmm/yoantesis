<?php


namespace Modules\security\Services;


use App\Services\Services;

class UsuariosService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\security\Models\Usuarios');
   }

}

