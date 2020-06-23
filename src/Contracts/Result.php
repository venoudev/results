<?php

namespace Venoudev\Results\Contracts;

use Venoudev\Results\Contracts\Message;
use Venoudev\Results\Contracts\Error;

interface Result {
    
    public function setStatus($status):void;

    public function getStatus():string;

    public function setCode($code):void;

    public function getCode():string;

    public function addDatum($key, $value):void;

    public function getDatum($key);

    public function getData():array;


    public function addError($value):void;

    public function getError($key):Error;

    public function getErrors():array;

    public function setErrors($errors):void;

    public function addMessage($value):void;

    public function getMessage($position):Message;

    public function getMessages():array;

    public function setMessages($messages):void;

    public function findMessage($message):bool;
}
