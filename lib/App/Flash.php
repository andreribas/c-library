<?php

namespace AndreRibas\Clibrary\App;

class Flash
{
    private array $messages = [];

    public function message(string $message)
    {
        $this->messages[] = new FlashMessage(FlashMessage::MESSAGE, $message);
    }

    public function error(string $message)
    {
        $this->messages[] = new FlashMessage(FlashMessage::ERROR, $message);
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}