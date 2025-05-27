<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class DeporteController extends RestController
{


    /**
     *  DeporteController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Deporte';
        $classnamespaceservice='Modules\general\Services\DeporteService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

