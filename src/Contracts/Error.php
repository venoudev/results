<?php

namespace Venoudev\Results\Contracts;


interface Error {
    
    public function getCodeMessage():string;

    public function getMessage():string;

    public function getField():string;

}
