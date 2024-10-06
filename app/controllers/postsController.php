<?php


namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;


function indexAction(\PDO $connexion)
{
    // Charge les derniers posts dans $posts
    include_once "../app/models/postsModel.php";
    $posts = \App\Models\PostsModel\findAll($connexion);   
   
    // Charge la vue dans $content
    global  $content, $title;
    
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/_index.php';
    $content = ob_get_clean(); 
}

function showAction(PDO $connexion, int $id)
{

    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($connexion, $id);

    global $content, $title;
    $title = "Alex Parker - " . $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function addFormAction(PDO $connexion){

    global $content, $title;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}

function addAction(PDO $connexion, array $data) {

        include_once "../app/models/postsModel.php";
        $id = PostsModel\createOne($connexion, $data);
        header('Location: ' . BASE_PUBLIC_URL . 'posts');

}
function updateAction(PDO $connexion, int $id, array $data) {
        include_once '../app/models/postsModel.php';
        $response = PostsModel\updateOneById($connexion, $id, $data);
        header('Location: ' . BASE_PUBLIC_URL . 'posts');
}

function editFormAction(PDO $connexion, int $id)
{
    include_once '../app/models/postsModel.php'; 
    $post = \App\Models\PostsModel\findOneById($connexion, $id); 
    global $content, $title;
    $title = "Alex Parker - Edit Post"; 
    ob_start();
    include '../app/views/posts/editForm.php'; 
    $content = ob_get_clean();
}
