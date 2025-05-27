<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class Usuario_rolController extends RestController
{


    /**
     *  Usuario_rolController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Usuario_rol';
        $classnamespaceservice='Modules\security\Services\Usuario_rolService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

