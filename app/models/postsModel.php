<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT posts.*, categories.name AS category_name
        FROM posts
        JOIN categories ON posts.category_id = categories.id
        ORDER BY posts.created_at DESC
        LIMIT 10;"; 

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, $id): array
{
    $sql = "SELECT posts.*, categories.name AS category_name
        FROM posts
        JOIN categories ON posts.category_id = categories.id
        WHERE posts.id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}

function createOne(PDO $connexion, array $data): bool
{

    $sql = "INSERT INTO posts
            SET name = :name,
            created_at = NOW();";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':name', $data['name'],PDO::PARAM_STR);
       
    return $connexion->lastInsertId();
    $rs->execute(); 
    
}
