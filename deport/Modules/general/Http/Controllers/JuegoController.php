<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class JuegoController extends RestController
{


    /**
     *  JuegoController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Juego';
        $classnamespaceservice='Modules\general\Services\JuegoService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

