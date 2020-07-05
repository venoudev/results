<?php

namespace Venoudev\Results\Contracts;

use Venoudev\Results\Contracts\Message;
use Venoudev\Results\Contracts\Error;

interface Result {

    /**
     *
     * @return string
     */
    public function getDescription():string;

    /**
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description):void;

    /**
     *
     * @return string
     */
    public function getStatus():string;

    /**
     * Undocumented function
     *
     * @param string $status
     * @return void
     */
    public function setStatus(string $status):void;

    /**
     *
     * @param integer $code
     * @return void
     */
    public function setCode(int $code):void;

    /**
     * Undocumented function
     *
     * @return void
     */
     public function success():void;

     /**
      *
      * @return void
      */
     public function fail():void;
    
   
    /**
     *
     * @return integer
     */
    public function getCode():int;

    /**
     *
     * @param [type] $key
     * @param mixed $value
     * @return void
     */
    public function addDatum(string $key, $value):void;

    /**
     *
     * @param [type] $key
     * @return void
     */
    public function getDatum($key);

    /**
     *
     * @param [type] $key
     * @return boolean
     */
    public function deleteDatum($key):bool;

    /**
     *
     * @return array
     */
    public function getData():array;

    /**
     *
     * @param mixed $data
     * @return void
     */
    public function setData($data):void;

    /**
     *
     * @return void
     */
    public function clearData():void;

    /**
     *
     * @param array $arrayKeys
     * @return void
     */
    public function clearDataExceptKeys($array_keys):void;

    /**
     *
     * @param Error $fieldError
     * @return void
     */
    public function addFieldError($field_error):void;
    
    /**
     *
     * @param [type] $errorCode
     * @param [type] $message
     * @return void
     */
    public function addError($error_code, $message):void;
    
    /**
     *
     * @param [type] $key
     * @return Error
     */
    public function getError($key):Error;
    
    /**
     *
     * @return array
     */
    public function getErrors():array;
    
    /**
     *
     * @param [type] $fieldErrors
     * @return void
     */
    public function addFieldErrors($field_errors):void;
    
    /**
     *
     * @param array $errors
     * @return void
     */
    public function addErrors(array $errors):void;
    
    /**
     *
     * @param array $errors
     * @return boolean
     */
    public function setErrors(array $errors):bool;
    
    /**
     *
     * @return boolean
     */
    public function clearErrors():bool;

    /**
     * Add a message to result
     *
     * @param string $messageCode
     * @param string $message
     * @return void
     */
    public function addMessage(string $message_code, string $message):void;
    
    /**
     * get a messsage by your key
     *
     * @param int $key
     * @return Message
     */
    public function getMessage($key):Message;
    
    /**
     * Check if the result contains the message code
     *
     * @param string $messageCode
     * @return boolean
     */
    public function containsMessage($message_code):bool;

    /**
     *
     * @return array
     */
    public function getMessages():array;
    
    /**
     *
     * @param Message $messages
     * @return void
     */
    public function setMessages(Message $messages):void;
    
    /**
     *
     * @return boolean
     */
    public function clearMessages():bool;

 
    public function getJsonResponse();

 
    public function errorJsonResponse();


    public function successJsonResponse();
}
