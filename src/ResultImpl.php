<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Result;
use Venoudev\Results\ErrorImpl as Error;
use Venoudev\Results\MessageImpl as Message;

class ResultImpl implements Result
{
    protected $status;
    protected $data;
    protected $messages;
    protected $errors;
    protected $code;
 
    public function __construct(){

        $this->data=array();
        $this->errors=array();
        $this->status='SUCCESS';
        $this->messages=array();
    }
 
    public function setCode($code): void{
        $this->code = $code;
    }

    public function getCode():int{
        return $this->code;
    }
    
    public function setStatus($status):void{
        $this->status=strtoupper($status);
    }

    public function getStatus():string{
        return $this->status;
    }

    public function clearStatus():bool{
        $this->status='';
        return true;
    }
    
    public function addDatum($key, $value):void{
        $this->data[$key]=$value;
    }

    public function getDatum($key){
        return $this->data[$key];
    }

    public function deleteDatum($key):bool{
        unset($this->data[$key]);
        return true;
    }


    public function getData():array{
        return $this->data;
    }
 
    public function setData($data):void{
        $this->data = $data;
    }

    public function clearData():void{
        $this->data = [];
    }
 
    public function addFieldError($fieldError):void{
         $error = new Error($fieldError);

         array_push($this->errors,$error);
    }

    public function addError($errorCode, $message):void{
        $error = new Error($errorCode, $message);
        array_push($this->errors,$error);
    }

     
    public function getError($key):Error{
        return $this->data[$key];
    }
  
    public function getErrors():array{
        return $this->errors;
    }
 
    public function addFieldErrors($fieldErrors):void{
 
        foreach ($fieldErrors->all() as $fieldError) {
            $this->addFieldError($fieldError);
        }
    }

    public function addErrors(array $errors):void{
 
        foreach ($errors as $error) {
            $this->addError($error);
        }
    }

    public function setErrors(array $errors):bool{
        $this->errors = $errors;
        return true;
    }
 
    public function clearErrors():bool{
        $this->errors=[];
        return true;
    }
 
    public function addMessage($messageCode, $message):void{
        $message = new Message($messageCode, $message);
    
        if (!(in_array($message,$this->messages))){
            array_push($this->messages,$message);
        }
    }
 
    public function getMessage($key):Message{
    return $this->messages[$key];
    }

    public function containsMessage($messageCode):bool{

        foreach ($this->messages as $messageInstance) {
            if($messageCode == $messageInstance->getCodeMessage()){
                return true;
            }
        }

        return false;
    }
 
 
    public function getMessages():array{
        return $this->messages;
    }

    public function setMessages($messages):void{
        $this->messages=$messages;
    }

    public function clearMessages():bool{
        $this->messages=[];
        return true;
    }

    public function clearDataExceptKeys($arrayKeys):void{
    
        $temporaryKeysData = array_keys($this->data);

        $filtered = array_diff($temporaryKeysData, $arrayKeys );
        
        if(empty($filtered)){
            return;
        } 

        foreach ($filtered as $key) {
           $this->deleteDatum($key);
        }

        return;
    }

 }
