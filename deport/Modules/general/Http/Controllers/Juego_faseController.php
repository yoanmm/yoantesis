<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Juego_faseController extends RestController
{


    /**
     *  Juego_faseController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Juego_fase';
        $classnamespaceservice='Modules\general\Services\Juego_faseService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

