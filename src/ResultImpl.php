<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Result;
use Venoudev\Results\ErrorImpl as Error;
use Venoudev\Results\MessageImpl as Message;
use Venoudev\Results\Traits\ApiResponser;

class ResultImpl implements Result
{   
    use ApiResponser;

    protected array $data;
    protected array $messages;
    protected array $errors;
    protected int $code;
    protected string $description;
    protected string $status;
 
    public function __construct(){

        $this->data = [];
        $this->errors=[];
        $this->messages=[];
        $this->description='';
        $this->status = 'SUCCESS';
        $this->code = 200;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function setDescription(string $description=''):void{
        $this->description= $description;
    }

    public function getStatus():string{
        return $this->status;
    }

    public function setStatus(string $status='SUCCESS'):void{
        $this->status = $status;
    }

    public function success():void{
        $this->status = 'SUCCESS';
    }
    
    public function fail():void{
       $this->status = 'FAIL';
    }

 
    public function setCode($code): void{
        $this->code = $code;
    }

    public function getCode():int{
        return $this->code;
    }

    public function clearStatus():bool{
        $this->status='';
        return true;
    }
    
    /**
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function addDatum(string $key, $value):void{
        $key = $this->prepareJsonCode($key);
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
 
    public function addFieldError($field_error):void{
         $error = new Error($field_error);

         array_push($this->errors, $error);
    }

    public function addError($error_code, $message):void{
        $error = new Error($error_code, $message);
        array_push($this->errors,$error);
    }

     
    public function getError($key):Error{
        return $this->data[$key];
    }
  
    public function getErrors():array{
        return $this->errors;
    }
 
    public function addFieldErrors($field_errors):void{
 
        foreach ($field_errors->all() as $field_error) {
            $this->addFieldError($field_error);
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
 
    public function addMessage($message_code, $message):void{
       
        $message = new Message($message_code, $message);
        if (!(in_array($message,$this->messages))){
            array_push($this->messages,$message);
        }
    }
 
    public function getMessage($key):Message{
        return $this->messages[$key];
    }

    public function containsMessage($message_code):bool{

        foreach ($this->messages as $message_instance) {
            if($message_code == $message_instance->getCodeMessage()){
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

    public function clearDataExceptKeys($array_keys):void{
    
        $temporary_keys_data = array_keys($this->data);

        $filtered = array_diff($temporary_keys_data, $array_keys );
        
        if(empty($filtered)){
            return;
        } 

        foreach ($filtered as $key) {
           $this->deleteDatum($key);
        }
        return;
    }    

   
    public function getJsonResponse(){
        if($this->status=='FAIL'){
           return $this->errorJsonResponse();
        }

        return $this->successJsonResponse();
    }

    public function successJsonResponse(){
        return $this->successResponse(
            $this->data,
            $this->messages,
            $this->code,
            $this->description,
        );
    }

    public function errorJsonResponse(){
        return $this->errorResponse(
            $this->errors,
            $this->messages,
            $this->code,
            $this->description,
        );
    }

    public function prepareJsonCode($data){
        return strtolower(str_replace(' ','_',$data));
    }

 }
