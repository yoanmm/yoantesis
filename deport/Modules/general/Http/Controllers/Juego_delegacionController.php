<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class Juego_delegacionController extends RestController
{


    /**
     *  Juego_delegacionController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Juego_delegacion';
        $classnamespaceservice='Modules\general\Services\Juego_delegacionService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

