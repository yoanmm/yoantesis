<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Congresillo_asistenciaController extends RestController
{


    /**
     *  Congresillo_asistenciaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Congresillo_asistencia';
        $classnamespaceservice='Modules\general\Services\Congresillo_asistenciaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

