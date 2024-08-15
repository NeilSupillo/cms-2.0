<?php

namespace App\Models;

use PDO;

class Post
{
    public function getOnePost($tableName, $id)
    {
        try {
            $query = "SELECT * FROM " . $tableName . " WHERE id = ? LIMIT 0,1";
            $stmt = connect()->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
            return $stmt;
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
    public function getAllPosts($tableName)
    {
        try {
            $query = "SELECT * FROM " . $tableName;
            $stmt = connect()->prepare($query);
            $stmt->execute();
            return $stmt;
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
}
//start sesion here
//setSession('sucess', 'Post added successfully');
// header("Location: //posts/create");
