<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Evento_deportivoController extends RestController
{


    /**
     *  Evento_deportivoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Evento_deportivo';
        $classnamespaceservice='Modules\general\Services\Evento_deportivoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

