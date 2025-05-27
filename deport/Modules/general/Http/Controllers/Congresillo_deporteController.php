<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Congresillo_deporteController extends RestController
{


    /**
     *  Congresillo_deporteController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Congresillo_deporte';
        $classnamespaceservice='Modules\general\Services\Congresillo_deporteService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

