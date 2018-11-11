<?php
/**
 * Created by PhpStorm.
 * User: jovanela
 * Date: 11/11/18
 * Time: 19:40
 */

namespace Model;
// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

// récupération de tous les items
class ItemManager
{
    public function selectAllItems() :array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
}


