<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Delegacion_reglaController extends RestController
{


    /**
     *  Delegacion_reglaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Delegacion_regla';
        $classnamespaceservice='Modules\general\Services\Delegacion_reglaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

