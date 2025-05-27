<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Reclamacion_estadoController extends RestController
{


    /**
     *  Reclamacion_estadoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Reclamacion_estado';
        $classnamespaceservice='Modules\general\Services\Reclamacion_estadoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

