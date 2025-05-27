<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Persona_atletaController extends RestController
{


    /**
     *  Persona_atletaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Persona_atleta';
        $classnamespaceservice='Modules\general\Services\Persona_atletaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

