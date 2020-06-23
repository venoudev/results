<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Error;

class ErrorImpl implements Error
{
  protected String $code_message;
  protected String $message;
  protected String $field;

  public function __construct($value){
    $code_message='';
    $message='';
    $field='';
    $this->divide($value);
  }

  public function divide($data){
    $dataArray=explode(' # ',$data);
    //treated the data input for delete ' ' (space) and remplace for '_'
    switch (sizeof($dataArray)) {
      case 1:
        $this->code_message='[NOTHING]';
        $this->message=$dataArray[0];
        $this->field='[NOTHING]';
        break;
      default:
        $this->code_message=$dataArray[0];
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
    return $this->code_message;
  }

  public function getMessage():string{
    return $this->message;
  }
  public function getField():string{
    return $this->field;
  }

}
