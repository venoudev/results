<?php 

namespace Venoudev\Results\Contracts;

use Venoudev\Results\Contracts\Result;

interface ResultManager{

    public function createResult():Result;

}