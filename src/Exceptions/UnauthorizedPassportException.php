<?php

namespace Venoudev\Results\Exceptions;

use Venoudev\Results\Exceptions\BaseException;

class UnauthorizedPassportException extends BaseException{


    public function __construct(string $status = "FAIL", int $code = 400, Throwable $previous = null){

        parent::__construct($status, $code, $previous);
        $this->result->fail();
        $this->result->setCode(401);
        $this->result->setDescription('Unauthorized passport token, please check your auth token.');
        $this->addMessage('UNAUTHORIZED_PASSPORT','Your token is invalid.');
        $this->addError('INVALID_TOKEN', 'Your token is invalid or expired');
    }
}
