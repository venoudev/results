<?php

namespace Venoudev\Results\Facades;

/**
 * @method static mixed sear(string $key, \Closure $callback)
 *
 * @see  Venoudev\Results\Contracts\ResultManager
 */


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