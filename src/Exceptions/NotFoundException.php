<?php


namespace Venoudev\Results\Exceptions;


use Venoudev\Results\Exceptions\BaseException;

class NotFoundException extends BaseException{
    

    public function __construct(string $status = "FAIL", int $code = 400, Throwable $previous = null){

        parent::__construct($status, $code, $previous);
        
        $this->result = ResultManager::createResult();
        $this->result->fail();
        $this->result->setCode($code);
        $this->result->setDescription('Resource not found, please check the errors or messages.');
    }    
}
