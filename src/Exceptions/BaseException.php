<?php 

namespace Venoudev\Results\Exceptions;

use Throwable;
use Venoudev\Results\Contracts\Result;
use ResultManager;

class BaseException extends \Exception{

    protected Result $result;

    public function __construct(string $status = "FAIL",int $code = 400, Throwable $previous = null){
        parent::__construct($status, $code, $previous);
        $this->result = ResultManager::createResult();
    }

    /**
     *
     * @param string $message_code
     * @param string $message
     * @return void
     */
    public function addMessage(string $message_code, string $message):void{
        $this->result->addMessage($message_code, $message);
    }

    /**
     *
     * @param string $message_code
     * @param string $message
     * @return void
     */
    public function addError(string $message_code, string $message):void{
        $this->result->addMessage($message_code, $message);
    }

    /**
     * @param string $error_code
     * @param string $field
     * @param string $message
     * @return void
     */
    public function addCustomFieldError(string $error_code='', string $field='', string $message=''):void{
        $this->result->addCustomFieldError($error_code,  $field, $message);
    }

    /**
     * @return Result
     */
    public function getResult():Result{
        return $this->result;
    }

    /**
     *
     * @return void
     */
    public function clearMessages():void{
        $this->result->clearMessages();
    }

    /**
     *
     * @param array $field_errors
     * @return void
     */
    public function addFieldErrors($field_errors):void{
        $this->result->addFieldErrors($field_errors);
    }  

    /**
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description):void{  
        $this->result->setDescription($description);
    }
    /**
     * @return string
     */
    public function getJsonResponse(){
       return $this->result->getJsonResponse();
    }
}