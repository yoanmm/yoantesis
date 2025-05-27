<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Evento_deportivo_reglaController extends RestController
{


    /**
     *  Evento_deportivo_reglaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Evento_deportivo_regla';
        $classnamespaceservice='Modules\general\Services\Evento_deportivo_reglaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

