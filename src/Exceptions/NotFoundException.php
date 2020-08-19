<?php


namespace Venoudev\Results\Exceptions;

use Venoudev\Results\Exceptions\BaseException;

class NotFoundException extends BaseException{
    

    public function __construct(string $status = "FAIL", int $code = 400, Throwable $previous = null){

        parent::__construct($status, $code, $previous);
        
        $this->result->fail();
        $this->result->setCode($code);
        $this->result->setDescription('Exist conflict with the request, please check the errors or messages.');
        $this->addMessage('NOT_FOUND', 'Resource not found check your request data.');
    }    
}
