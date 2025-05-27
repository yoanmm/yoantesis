<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Deporte_reglaController extends RestController
{


    /**
     *  Deporte_reglaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Deporte_regla';
        $classnamespaceservice='Modules\general\Services\Deporte_reglaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

