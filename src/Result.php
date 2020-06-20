<?php

namespace Venoudev\Results;

use Venoudev\Results\Message;
use Venoudev\Results\Error;


class Result
{
   protected $status;
   protected $data;
   protected $messages;
   protected $errors;

    public function __construct(){

        $this->data=array();
        $this->errors=array();
        $this->status='SUCCESS';
        $this->messages=array();
        $this->code=200;
    }

    public function setStatus($status){
        $this->status=$status;
    }
    public function getStatus(){
        return $this->status;
    }

    public function setCode($code){
        $this->code=$code;
    }

    public function getCode(){
        return $this->code;
    }

    public function addDatum($key, $value){
        $this->data[$key]=$value;
    }

    public function getDatum($key){
        return $this->data[$key];
    }

    public function getData(){
        return $this->data;
    }

    /**
    * Working in personalice methods of errors and messages v 0.1
    */

    public function addError($value){
     $error = new Error($value);
     array_push($this->errors,$error);
    }

    public function getError($key){
       return $this->data[$key];
    }

    public function getErrors(){
       return $this->errors;
    }

    public function setErrors($errors){

        foreach ($errors->all() as $error) {
            $this->addError($error);
        }
    }

    public function addMessage($value){
      $message = new Message($value);

      if (!(in_array($message,$this->messages))){
        array_push($this->messages,$message);
      }
    }

    public function getMessage($position){
        return $this->messages[$position];
    }

    public function getMessages(){
        return $this->messages;
    }

    public function setMessages($messages){
        return $this->messages=$messages;
    }

}
