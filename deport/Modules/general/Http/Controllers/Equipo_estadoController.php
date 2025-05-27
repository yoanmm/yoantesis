<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Equipo_estadoController extends RestController
{


    /**
     *  Equipo_estadoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Equipo_estado';
        $classnamespaceservice='Modules\general\Services\Equipo_estadoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

