<?php


namespace Modules\general\Services;


use App\Services\Services;

class PersonaService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\general\Models\Persona');
   }

}

