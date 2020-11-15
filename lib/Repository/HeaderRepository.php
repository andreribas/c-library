<?php

namespace AndreRibas\Clibrary\Repository;

use AndreRibas\Clibrary\Model\Header;

class HeaderRepository
{
    public static function getAll()
    {
        $db = DB::getDB();
        $stmt = $db->query("SELECT * FROM header");
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Header::class);
    }

    public static function getById($id): Header
    {
        $db = DB::getDB();
        $stmt = $db->prepare("SELECT * FROM header WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetchObject(Header::class);
    }

    public static function create(Header $header)
    {
        $db = DB::getDB();
        $stmt = $db->prepare("INSERT INTO header (title, description) VALUES (:title, :description)");
        $stmt->execute([':title' => $header->title, ':description' => $header->description]);
        return $db->lastInsertId();
    }
}
