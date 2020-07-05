<?php


namespace Venoudev\Results\Exceptions;

use Throwable;
use Venoudev\Results\Contracts\Result;
use ResultManager;

class CheckDataException extends \Exception
{
    protected Result $result;

    public function __construct(string $status = "FAIL",int $code = 400,
    Throwable $previous = null, $field_errors=null, string $description='Exist conflict with the request, please check the errors or messages.'){

        parent::__construct($status, $code, $previous);
        $this->result = ResultManager::createResult();
        $this->result->fail();
        $this->result->setCode($code);
        $this->result->setDescription($description);
        $this->result->addFieldErrors($field_errors);
        $this->addMessage('CHECK_DATA', 'The form has errors whit the inputs.');

    }

    public function addMessage($message_code, $message){
        $this->result->addMessage($message_code, $message);
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
