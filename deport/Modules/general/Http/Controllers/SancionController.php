<?php

namespace Modules\general\Http\Controllers;

use App\Http\Controllers\RestController;

class SancionController extends RestController
{


    /**
     *  SancionController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\general\Models\Sancion';
        $classnamespaceservice='Modules\general\Services\SancionService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

