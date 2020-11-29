<?php

namespace AndreRibas\Clibrary\Repository;

use AndreRibas\Clibrary\Facade\DB;
use AndreRibas\Clibrary\Model\Header;

class HeaderRepository
{
    public static function getAll(): array
    {
        $db = DB::get();
        $stmt = $db->query("SELECT * FROM header");
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Header::class);
    }

    public static function getAllWithFunctionns(): array
    {
        return array_map(function(Header $header) {
            $header->functionns = FunctionnRepository::getByHeaderId($header->id);
            return $header;
        }, HeaderRepository::getAll());
    }

    public static function getById($id): Header
    {
        $db = DB::get();
        $stmt = $db->prepare("SELECT * FROM header WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $object = $stmt->fetchObject(Header::class);
        if ($object === false) {
            throw new ModelNotFoundException("Header id {$id} not found");
        }
        return $object;
    }

    public static function getByTitle($title): array
    {
        $db = DB::get();
        $stmt = $db->prepare("SELECT * FROM header WHERE title like :title");
        $stmt->execute([':title' => "%$title%"]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Header::class);
    }

    public static function create(Header $header): int
    {
        $db = DB::get();
        $stmt = $db->prepare("INSERT INTO header (title, description) VALUES (:title, :description)");
        $stmt->execute([':title' => $header->title, ':description' => $header->description]);
        return $db->lastInsertId();
    }

    public static function delete(Header $header): bool
    {
        $db = DB::get();
        $stmt = $db->prepare("DELETE FROM header WHERE id = :id");
        $stmt->execute([':id' => $header->id]);
        return $stmt->rowCount() == 1;
    }

    public static function update(Header $header)
    {
        $db = DB::get();
        $stmt = $db->prepare("UPDATE header SET title = :title, description = :description WHERE id = :id");
        $stmt->execute([':id' => $header->id, ':title' => $header->title, ':description' => $header->description]);
        return $stmt->rowCount() == 1;
    }
}
