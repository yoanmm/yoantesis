<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class CanchaController extends RestController
{


    /**
     *  CanchaController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Cancha';
        $classnamespaceservice='Modules\general\Services\CanchaService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

