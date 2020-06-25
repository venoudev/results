<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Error;

class ErrorImpl implements Error
{
  protected String $errorCode;
  protected String $message;
  protected String $field;


  public function __construct(){
      $a = func_get_args();
      $i = func_num_args();
      if (method_exists($this,$f='__construct'.$i)) {
          call_user_func_array(array($this,$f),$a);
      }

  }

  public function __construct1($errorField)
  {
      $errorCode='';
      $message='';
      $field='';
      $this->divide($errorField);
  }

  public function __construct2($errorCode, $message)
  {
      $this->errorCode = strtoupper($errorCode);
      $this->errorCode = $this->strSpaceReplace($this->erroCode);
      $this->message=$message;
      $this->field='NOTHING';
  }

  public function divide($data){

    $dataArray=explode(' # ',$data);

    switch (sizeof($dataArray)) {
      case 1:
          $this->errorCode='NOTHING';
          $this->message=$dataArray[0];
          $this->field='NOTHING';
        break;
      default:
          $this->errorCode=strtoupper($dataArray[0]);
          $treatedField= $this->strSpaceReplace($dataArray[1]);
          $this->field=$treatedField;
          $this->message=$dataArray[2];
        break;
    }
  }

  public function strSpaceReplace($data){
    return str_replace(' ','_',$data);
  }

  public function getCodeMessage():string{
    return $this->errorCode;
  }

  public function getMessage():string{
    return $this->message;
  }
  public function getField():string{
    return $this->field;
  }

}