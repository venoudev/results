<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Message;

class MessageImpl implements Message
{
  protected $message_code;
  protected $message;

  public function __construct($message_code, $message){

    $this->message_code = strtoupper($message_code);
    $this->message = $message;

  }

  public function getCodeMessage():string{
    return $this->message_code;
  }

  public function getMessage():string{
    return $this->message;
  }

  public function strSpaceReplace($data){
    return str_replace(' ','_',$data);
  }
}
