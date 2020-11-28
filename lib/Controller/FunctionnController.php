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
        return new Response('functionn/index.php', [
            'headers' => HeaderRepository::getAllWithFunctionns(),
        ]);
    }

    public static function create(Request $request)
    {

    }

    public static function store(Request $request)
    {

    }

    public static function show(Request $request, $functionn_id)
    {
        return new Response('functionn/show.php', [
            'headers' => HeaderRepository::getAllWithFunctionns(),
            'functionn' => FunctionnRepository::getById((int)$functionn_id),
        ]);
    }

    public static function edit(Request $request, $functionn_id)
    {

    }

    public static function update(Request $request, $functionn_id)
    {

    }

    public static function destroy(Request $request, $functionn_id)
    {

    }
}