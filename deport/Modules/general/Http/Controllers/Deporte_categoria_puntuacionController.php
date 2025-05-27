<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Deporte_categoria_puntuacionController extends RestController
{


    /**
     *  Deporte_categoria_puntuacionController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Deporte_categoria_puntuacion';
        $classnamespaceservice='Modules\general\Services\Deporte_categoria_puntuacionService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

