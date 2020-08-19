<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Error;

class ErrorImpl implements Error
{
  protected String $error_code;
  protected String $message;
  protected String $field;


  public function __construct(){
      $a = func_get_args();
      $i = func_num_args();
      if (method_exists($this,$f='__construct'.$i)) {
          call_user_func_array(array($this,$f),$a);
      }

  }

  public function __construct1($error_field)
  {
      $error_code='';
      $message='';
      $field='';
      $this->divide($error_field);
  }

  public function __construct2($error_code, $message)
  {
      $this->error_code = $this->strSpaceReplace(strtoupper($error_code));
      $this->message=$message;
      $this->field='NOTHING';
  }

  public function __construct3($error_code, $field, $message)
  {
      $this->error_code = $this->strSpaceReplace(strtoupper($error_code));
      $this->message = $message;
      $this->field = $field;
  }

  public function divide($data){

    $data_array=explode(' # ',$data);

    switch (sizeof($data_array)) {
      case 1:
          $this->error_code='NOTHING';
          $this->message=$data_array[0];
          $this->field='NOTHING';
        break;
      default:
          $this->error_code=strtoupper($data_array[0]);
          $treated_field= $this->strSpaceReplace($data_array[1]);
          $this->field=$treated_field;
          $this->message=$data_array[2];
        break;
    }
  }

  public function strSpaceReplace($data){
    return str_replace(' ','_',$data);
  }

  public function getCodeMessage():string{
    return $this->error_code;
  }

  public function getMessage():string{
    return $this->message;
  }
  public function getField():string{
    return $this->field;
  }

}