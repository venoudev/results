<?php

namespace Venoudev\Results;

use App;

use Venoudev\Results\Contracts\Manager;

class ResultManager implements Manager{

    public function createResult(){
      return App::make('Venoudev\Results\Contracts\Result');
    }

}