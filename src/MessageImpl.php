<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Message;

class MessageImpl implements Message
{
  protected $messageCode;
  protected $message;

  public function __construct($messageCode, $message){

    $this->messageCode = strtoupper($messageCode);
    $this->message = $message;

  }

  public function getCodeMessage():string{
    return $this->messageCode;
  }

  public function getMessage():string{
    return $this->message;
  }

  public function strSpaceReplace($data){
    return str_replace(' ','_',$data);
  }
}
