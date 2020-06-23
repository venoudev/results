<?php

namespace Venoudev\Results\Contracts;

interface Message {

    public function getCodeMessage():string;

    public function getMessage():string;
}
