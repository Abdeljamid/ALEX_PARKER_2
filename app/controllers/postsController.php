<?php


namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;

function showAction(PDO $connexion, int $id)
{
    //Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    //Je charge la vue index.php des posts dans $content
    global $content, $title;
    $title = "Alex parker - " . $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}