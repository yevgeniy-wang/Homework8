<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$categories = \Hillel\Homework8\Model\Category::all();

echo $blade->make('pages/categories/list', ['categories' => $categories])->render();