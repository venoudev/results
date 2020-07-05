<?php


namespace Venoudev\Results\Exceptions;

use Throwable;
use Venoudev\Results\Contracts\Result;
use ResultManager;

class NotFoundException extends \Exception
{
    protected Result $result;

    public function __construct(string $status = "FAIL",int $code = 400,
    Throwable $previous = null, $field_errors=null, string $description='Resource not found, please check the errors or messages.'){

        parent::__construct($status, $code, $previous);
        $this->result = ResultManager::createResult();
        $this->result->fail();
        $this->result->setCode($code);
        $this->result->setDescription($description);
        $this->result->addFieldErrors($field_errors);

    }

    public function addMessage($message_code, $message){
        $this->result->addMessage($message_code, $message);
    }

    public function addError($error_code, $message){
        $this->result->addError($error_code, $message);
    }

    public function clearMessages(){
        $this->result->clearMessages();
    }

    /**
     * @return string
     */
    public function getJsonResponse(){
       return $this->result->getJsonResponse();
    }

}
