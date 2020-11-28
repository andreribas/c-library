<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Repository\FunctionnRepository;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class HeaderController
{
    public static function index(Request $request)
    {

    }

    public static function create(Request $request)
    {

    }

    public static function store(Request $request)
    {

    }

    public static function show(Request $request, $header_id)
    {
        return new Response('header.php', [
            'header' => HeaderRepository::getById($header_id),
            'functionns' => FunctionnRepository::getByHeaderId($header_id),
        ]);
    }

    public static function edit(Request $request)
    {

    }

    public static function update(Request $request)
    {

    }

    public static function destroy(Request $request)
    {

    }
}