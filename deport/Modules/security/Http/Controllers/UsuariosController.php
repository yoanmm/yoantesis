<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class UsuariosController extends RestController
{


    /**
     *  UsuariosController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Usuarios';
        $classnamespaceservice='Modules\security\Services\UsuariosService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

