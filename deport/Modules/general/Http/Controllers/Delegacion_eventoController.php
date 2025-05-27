<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Delegacion_eventoController extends RestController
{


    /**
     *  Delegacion_eventoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Delegacion_evento';
        $classnamespaceservice='Modules\general\Services\Delegacion_eventoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

