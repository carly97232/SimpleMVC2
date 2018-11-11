<?php
/**
 * Created by PhpStorm.
 * User: jovanela
 * Date: 11/11/18
 * Time: 19:40
 */
// src/Controller/ItemController.php
require __DIR__ . '/../Model/ItemManager.php';

$items = selectAllItems();

require __DIR__ . '/../View/item.php';
?>