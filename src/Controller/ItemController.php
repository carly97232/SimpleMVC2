<?php
/**
 * Created by PhpStorm.
 * User: jovanela
 * Date: 11/11/18
 * Time: 19:40
 */

namespace Controller;
use Model\ItemManager;

class ItemController
{
    public function index()
    {
        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
    }
}
?>