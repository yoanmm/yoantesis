<?php

namespace Modules\security\Http\Controllers;

use App\Http\Controllers\RestController;

class LogController extends RestController
{


    /**
     *  LogController constructor.
     */
    public function __construct()
    {
        $classnamespace='Modules\security\Models\Log';
        $classnamespaceservice='Modules\security\Services\LogService';
        $this->modelClass=new $classnamespace ;
        $this->service= new $classnamespaceservice(new $classnamespace);
    }


}

