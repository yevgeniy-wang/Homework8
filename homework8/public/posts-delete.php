<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

$post = \Hillel\Homework8\Model\Post::find($_GET['id']);
$tags = $post->tags;
if(!empty($tags->toArray())) {
    foreach ($tags as $tag) {
        $post->tags()->detach($tag->id);
    }
    $post->delete();
} else $post->delete();

header('Location: posts-list.php');