<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post = new \Hillel\Homework8\Model\Post();
    $post->title = $_POST['title'];
    $post->slug = $_POST['slug'];
    $post->body = $_POST['body'];
    $post->category_id = $_POST['category_id'];
    $post->save();

    header('Location: posts-list.php');
}

echo $blade->make('pages/posts/create')->render();