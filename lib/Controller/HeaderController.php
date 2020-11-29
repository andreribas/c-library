<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Request;
use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Facade\Flash;
use AndreRibas\Clibrary\Model\Header;
use AndreRibas\Clibrary\Repository\FunctionnRepository;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class HeaderController
{
    public static function index(Request $request)
    {
        return new Response('header/index.php', [
            'headers' => HeaderRepository::getAllWithFunctionns(),
        ]);
    }

    public static function create(Request $request)
    {
        return new Response('header/create.php', [
            'headers' => HeaderRepository::getAll(),
        ]);
    }

    public static function store(Request $request)
    {
        $header = new Header();
        $header->title = $request->getParam('title');
        $header->description = $request->getParam('description');
        $header->id = HeaderRepository::create($header);

        Flash::message("Header {$header->title} created successfully");

        return self::show($request, $header->id);
    }

    public static function show(Request $request, $header_id)
    {
        return new Response('header/show.php', [
            'header' => HeaderRepository::getById($header_id),
            'functionns' => FunctionnRepository::getByHeaderId($header_id),
        ]);
    }

    public static function edit(Request $request, $header_id)
    {
        return new Response('header/edit.php', [
            'header' => HeaderRepository::getById($header_id),
        ]);
    }

    public static function update(Request $request, $header_id)
    {
        $header = new Header();
        $header->id = (int) $request->getParam('id');
        $header->title = $request->getParam('title');
        $header->description = $request->getParam('description');
        $updated = HeaderRepository::update($header);

        if ($updated) Flash::message("Header {$header->title} updated successfully");
        else Flash::error("Error trying to update Header {$header->title}");

        return self::show($request, $header_id);
    }

    public static function destroy(Request $request, $header_id)
    {
        $header = HeaderRepository::getById($header_id);
        $deleted = HeaderRepository::delete($header);

        if ($deleted) Flash::message("Header {$header->title} deleted successfully");
        else Flash::error("Error trying to delete Header {$header->title}");

        return self::index($request);
    }
}