<?php


namespace Modules\general\Services;


use App\Services\Services;

class Juego_delegacionService extends Services
{

 public function __construct()
  {
      parent::__construct('Modules\general\Models\Juego_delegacion');
   }

}

