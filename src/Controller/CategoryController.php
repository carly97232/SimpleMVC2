<?php
/**
 * Created by PhpStorm.
 * User: jovanela
 * Date: 11/11/18
 * Time: 21:02
 */

namespace Controller;

use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;


class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllCategories();

        return $this->twig->render('Category/category.html.twig', ['categories' => $categories]);
    }
    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        return $this->twig->render('Category/showCategory.html.twig', ['category' => $category]);
    }
}