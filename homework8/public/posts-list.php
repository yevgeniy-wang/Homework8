<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$posts = \Hillel\Homework8\Model\Post::all();

echo $blade->make('pages/posts/list', ['posts' => $posts])->render();