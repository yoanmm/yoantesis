<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Equipo_atletaController extends RestController
{


    /**
     *  Equipo_atletaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Equipo_atleta';
        $classnamespaceservice='Modules\general\Services\Equipo_atletaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

