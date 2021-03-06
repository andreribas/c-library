<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Request;
use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Facade\Flash;
use AndreRibas\Clibrary\Model\Functionn;
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
        return new Response('functionn/create.php', [
            'headers' => HeaderRepository::getAll(),
        ]);
    }

    public static function store(Request $request)
    {
        $functionn = new Functionn();
        $functionn->title = $request->getParam('title');
        $functionn->description = $request->getParam('description');
        $functionn->header_id = (int) $request->getParam('header_id');
        $functionn->id = FunctionnRepository::create($functionn);

        Flash::message("Function {$functionn->title} created successfully");

        return self::show($request, $functionn->id);
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
        return new Response('functionn/edit.php', [
            'headers' => HeaderRepository::getAllWithFunctionns(),
            'functionn' => FunctionnRepository::getById((int)$functionn_id),
        ]);
    }

    public static function update(Request $request, $functionn_id)
    {
        $functionn = new Functionn();
        $functionn->id = (int) $request->getParam('id');
        $functionn->title = $request->getParam('title');
        $functionn->description = $request->getParam('description');
        $functionn->header_id = (int) $request->getParam('header_id');
        $updated = FunctionnRepository::update($functionn);

        if ($updated) Flash::message("Function {$functionn->title} updated successfully");
        else Flash::error("Error trying to update Function {$functionn->title}");

        return self::show($request, $functionn_id);
    }

    public static function destroy(Request $request, $functionn_id)
    {
        $functionn = FunctionnRepository::getById($functionn_id);
        $deleted = FunctionnRepository::delete($functionn);

        if ($deleted) Flash::message("Function {$functionn->title} deleted successfully");
        else Flash::error("Error trying to delete Function {$functionn->title}");

        return self::index($request);
    }
}