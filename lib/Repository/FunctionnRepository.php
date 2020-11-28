<?php

namespace AndreRibas\Clibrary\Repository;

use AndreRibas\Clibrary\App\Service;
use AndreRibas\Clibrary\Model\Functionn;

class FunctionnRepository
{
    public static function getAll()
    {
        $db = Service::get('db');
        $stmt = $db->prepare("SELECT * FROM `function`");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Functionn::class);
    }

    public static function getById($functionn_id)
    {
        $db = Service::get('db');
        $stmt = $db->prepare("SELECT * FROM `function` WHERE id = :id");
        $stmt->execute([':id' => $functionn_id]);
        $object = $stmt->fetchObject(Functionn::class);
        if ($object === false) {
            throw new ModelNotFoundException("Function id {$functionn_id} not found");
        }
        return $object;
    }

    public static function getByHeaderId($header_id)
    {
        $db = Service::get('db');
        $stmt = $db->prepare("SELECT * FROM `function` WHERE header_id = :header_id");
        $stmt->execute([':header_id' => $header_id]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Functionn::class);
    }

    public static function getByTitle($function_title)
    {
        $db = Service::get('db');
        $stmt = $db->prepare("SELECT * FROM `function` WHERE title like :title");
        $stmt->execute([':title' => "%$function_title%"]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Functionn::class);
    }

    public static function create(Functionn $functionn)
    {
        $db = Service::get('db');
        $stmt = $db->prepare("INSERT INTO `function` (title, description, header_id) VALUES (:title, :description, :header_id)");
        $stmt->execute([':title' => $functionn->title, ':description' => $functionn->description, ':header_id' => $functionn->header_id]);
        return $db->lastInsertId();
    }
}