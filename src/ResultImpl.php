<?php

namespace Venoudev\Results;

use Venoudev\Results\Contracts\Result;
use Venoudev\Results\ErrorImpl as Error;
use Venoudev\Results\MessageImpl as Message;

class ResultImpl implements Result
{
    protected $status;
    protected $data;
    protected $messages;
    protected $errors;
    protected $manager;

    public function __construct()
    {

        $this->data = array();
        $this->errors = array();
        $this->status = 'success';
        $this->messages = array();
        $this->code = 200;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setCode($code): void
    {
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function addDatum($key, $value): void
    {
        $this->data[$key] = $value;
    }

    public function getDatum($key)
    {
        return $this->data[$key];
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function addError($value): void
    {
        $error = new Error($value);
        array_push($this->errors, $error);

    }

    public function getError($key): Error
    {
        return $this->data[$key];
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors($errors): void
    {

        foreach ($errors->all() as $error) {
            $this->addError($error);
        }
    }

    public function addMessage($value): void
    {
        $message = new Message($value);

        if (!(in_array($message, $this->messages))) {
            array_push($this->messages, $message);
        }
    }

    public function getMessage($position): Message
    {
        return $this->messages[$position];
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setMessages($messages): void
    {
        $this->messages = $messages;
    }

    public function findMessage($message): bool
    {

        foreach ($this->messages as $messageInstance) {
            if ($message == $messageInstance->getCodeMessage()) {
                return true;
            }
        }
        return false;
    }
}
