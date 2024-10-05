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

function addFormAction(PDO $connexion){

    global $content, $title;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();

}
function addAction(PDO $connexion, array $data) {
    if (!empty($data['title']) && !empty($data['text'])) { // Vérifie que les données ne sont pas vides
        include_once "../app/models/postsModel.php";include_once "../app/models/postsModel.php";
        $success = PostsModel\createOne($connexion, $data);
        if ($success) {
            header('Location: ' . BASE_PUBLIC_URL . 'posts'); // Redirige après succès
            exit; // Assure-toi de sortir après la redirection
        } else {
            // Gère l'erreur d'insertion ici (afficher un message, etc.)
            echo "Erreur lors de l'ajout du post.";
        }
    } else {
        echo "Les données du formulaire sont manquantes.";
    }
}