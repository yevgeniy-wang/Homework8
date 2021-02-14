<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

/** @var $blade */

$post = \Hillel\Homework8\Model\Post::find($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $post->title = $_POST['title'];
    $post->slug = $_POST['slug'];
    $post->body = $_POST['body'];
    $post->category_id = $_POST['category_id'];
    $post->save();

    header('Location: posts-list.php');
}

echo $blade->make('pages/posts/update', ['post' => $post])->render();