<?php
require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

$category = \Hillel\Homework8\Model\Category::find($_GET['id']);
$posts = $category->posts;
if (!empty($posts->toArray())) {
    foreach ($posts as $post) {
        if ($post->category_id == $category->id) {
            if ($tags = $post->tags) {
                foreach ($tags as $tag) {
                    $post->tags()->detach($tag->id);
                }
                $post->delete();
            } else $post->delete();
        }
    }
    $category->delete();
} else $category->delete();

header('Location: categories-list.php');