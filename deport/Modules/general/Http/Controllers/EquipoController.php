<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class EquipoController extends RestController
{


    /**
     *  EquipoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Equipo';
        $classnamespaceservice='Modules\general\Services\EquipoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

