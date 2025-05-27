<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Persona_arbitroController extends RestController
{


    /**
     *  Persona_arbitroController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Persona_arbitro';
        $classnamespaceservice='Modules\general\Services\Persona_arbitroService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

