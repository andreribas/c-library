<?php

namespace AndreRibas\Clibrary\Repository;

use AndreRibas\Clibrary\DB;
use AndreRibas\Clibrary\Model\Functionn;

class FunctionnRepository
{
    public static function getAll()
    {
        $db = DB::getDB();
        $stmt = $db->prepare("SELECT * FROM `function`");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Functionn::class);
    }

    public static function getById($functionn_id)
    {
        $db = DB::getDB();
        $stmt = $db->prepare("SELECT * FROM `function` WHERE id = :id");
        $stmt->execute([':id' => $functionn_id]);
        return $stmt->fetchObject(Functionn::class);
    }

    public static function getByHeaderId($header_id)
    {
        $db = DB::getDB();
        $stmt = $db->prepare("SELECT * FROM `function` WHERE header_id = :header_id");
        $stmt->execute([':header_id' => $header_id]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Functionn::class);
    }

    public static function getByTitle($function_title)
    {
        $db = DB::getDB();
        $stmt = $db->query("SELECT * FROM `function` WHERE title like :id");
        $stmt->bindValue(':id', "%$function_title%");
        return $stmt->fetchObject(Functionn::class);
    }
}