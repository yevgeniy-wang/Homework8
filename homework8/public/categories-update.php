<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$category = \Hillel\Homework8\Model\Category::find($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();

    header('Location: categories-list.php');
}

echo $blade->make('pages/categories/update', ['category' => $category])->render();

