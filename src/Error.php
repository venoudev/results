<?php

namespace Venoudev\Results;

class Error
{
  protected $code_message;
  protected $message;
  protected $field;

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
  public function getCodeMessage(){
    return $this->code_message;
  }

  public function getMessage(){
    return $this->message;
  }
  public function getField(){
    return $this->field;
  }

}
