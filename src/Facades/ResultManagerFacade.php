<?php

namespace Venoudev\Results\Facades;


use Illuminate\Support\Facades\Facade;

class ResultManagerFacade extends Facade{

    protected static function getFacadeAccessor() { return 'manager'; }

}