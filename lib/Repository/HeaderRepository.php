<?php

namespace AndreRibas\Clibrary\Repository;

use AndreRibas\Clibrary\App\Service;
use AndreRibas\Clibrary\Model\Header;

class HeaderRepository
{
    public static function getAll()
    {
        $db = Service::get('db');
        $stmt = $db->query("SELECT * FROM header");
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Header::class);
    }

    public static function getAllWithFunctionns()
    {
        return array_map(function(Header $header) {
            $header->functionns = FunctionnRepository::getByHeaderId($header->id);
            return $header;
        }, HeaderRepository::getAll());
    }

    public static function getById($id): Header
    {
        $db = Service::get('db');
        $stmt = $db->prepare("SELECT * FROM header WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $object = $stmt->fetchObject(Header::class);
        if ($object === false) {
            throw new ModelNotFoundException("Header id {$id} not found");
        }
        return $object;
    }

    public static function create(Header $header)
    {
        $db = Service::get('db');
        $stmt = $db->prepare("INSERT INTO header (title, description) VALUES (:title, :description)");
        $stmt->execute([':title' => $header->title, ':description' => $header->description]);
        return $db->lastInsertId();
    }
}
