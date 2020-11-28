<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Request;
use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Repository\FunctionnRepository;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class FunctionnController
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

    public static function show(Request $request, $functionn_id)
    {
        return new Response('functionn.php', [
            'headers' => HeaderRepository::getAllWithFunctionns(),
            'functionn' => FunctionnRepository::getById((int)$functionn_id),
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