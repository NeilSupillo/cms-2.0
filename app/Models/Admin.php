<?php

namespace App\Models;

use PDO;

class Admin
{
    public function getAll($tableName)
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
    public function getOne($tableName, $id)
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
    public function store($tableName, $data)
    {
        try {
            $query = "INSERT INTO " . $tableName . " SET title=:title, content=:content, summary=:summary, date=:date";
            $stmt = connect()->prepare($query);

            $stmt->bindParam(":title", $data["title"]);
            $stmt->bindParam(":content", $data["content"]);
            $stmt->bindParam(":summary", $data['summary']);
            $stmt->bindParam(":date", $data['date']);

            $stmt->execute();
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
    public function updateOne($tableName, $data)
    {
        try {
            $query = "UPDATE " . $this->table_name . " SET title=:title, content=:content, summary=:summary, date=:date WHERE id = :id";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":content", $this->content);
            $stmt->bindParam(":summary", $this->summary);
            $stmt->bindParam(":date", $this->date);
            $stmt->bindParam(":id", $this->id);

            $stmt->execute();
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
}
