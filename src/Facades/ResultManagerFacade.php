<?php

namespace Venoudev\Results\Facades;

use Illuminate\Support\Facades\Facade;

class ResultManagerFacade extends Facade{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(){
        return 'resultManager';
    }

}