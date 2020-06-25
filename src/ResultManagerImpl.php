<?php

namespace Venoudev\Results;

use App;

use Venoudev\Results\Contracts\ResultManager;
use Venoudev\Results\Contracts\Result;

class ResultManagerImpl implements ResultManager{

    /**
     * @return Result
     */
    public function createResult():Result{
      return App::make(Result::class);
    }
}