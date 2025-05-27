<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class PersonaController extends RestController
{


    /**
     *  PersonaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Persona';
        $classnamespaceservice='Modules\general\Services\PersonaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

