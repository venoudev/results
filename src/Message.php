<?php

namespace Venoudev\Results;

class Message
{
  protected $code_message;
  protected $message;

  public function __construct($value){
    $code_message='';
    $message='';
    $this->divide($value);
  }

  public function divide($data){
    $dataArray=explode(' # ',$data);
    $this->code_message=$dataArray[0];
    $this->message=$dataArray[1];
  }

  public function getCodeMessage(){
    return $this->code_message;
  }

  public function getMessage(){
    return $this->message;
  }
}
