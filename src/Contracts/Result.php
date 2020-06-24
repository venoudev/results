<?php

namespace Venoudev\Results\Contracts;

use Venoudev\Results\Contracts\Message;
use Venoudev\Results\Contracts\Error;

interface Result {
    
    public function setCode(int $code):void;
    public function getCode():int;

    public function setStatus(String $status):void;
    public function getStatus():string;
    public function clearStatus():bool;

    public function addDatum($key, $value):void;
    public function getDatum($key);
    public function deleteDatum($key):bool;

    public function getData():array;
    public function setData($data):void;
    public function clearData():void;
    public function clearDataExceptKeys($arrayKeys):void;

    public function addFieldError($fieldError):void;
    public function addError($errorCode, $message):void;
    public function getError($key):Error;

    public function getErrors():array;
    public function addFieldErrors($fieldErrors):void;
    public function addErrors(array $errors):void;
    public function setErrors(array $errors):bool;
    public function clearErrors():bool;

    public function addMessage(string $messageCode, string $message):void;
    public function getMessage($key):Message;
    public function containsMessage($messageCode):bool;


    public function getMessages():array;
    public function setMessages($messages):void;
    public function clearMessages():bool;
}
