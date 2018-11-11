<?php
/**
 * Created by PhpStorm.
 * User: jovanela
 * Date: 11/11/18
 * Time: 19:40
 */
// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

// récupération de tous les items
function selectAllItems() :array
{
    $pdo = new \PDO(DSN, USER, PASS);
    $query = "SELECT * FROM item";
    $res = $pdo->query($query);
    return $res->fetchAll();
}

?>