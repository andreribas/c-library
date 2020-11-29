<?php

namespace AndreRibas\Clibrary\Facade;

use AndreRibas\Clibrary\App\FlashMessage;
use AndreRibas\Clibrary\App\Service;

class Flash
{
    public static function message(string $message): void
    {
        Service::get('flash')->message($message);
    }

    public static function error(string $message): void
    {
        Service::get('flash')->error($message);
    }

    /**
     * @return FlashMessage[]
     */
    public static function getMessages(): array
    {
        return Service::get('flash')->getMessages();
    }
}