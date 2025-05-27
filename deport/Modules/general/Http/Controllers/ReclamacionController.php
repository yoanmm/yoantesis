<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class ReclamacionController extends RestController
{


    /**
     *  ReclamacionController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Reclamacion';
        $classnamespaceservice='Modules\general\Services\ReclamacionService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

