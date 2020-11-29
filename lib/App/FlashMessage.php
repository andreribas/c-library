<?php

namespace AndreRibas\Clibrary\App;

class FlashMessage
{
    public const MESSAGE = 'primary';
    public const ERROR = 'danger';

    private string $type;
    private string $message;

    public function __construct(string $type, string $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function getAlertStyle(): string
    {
        return $this->type;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}