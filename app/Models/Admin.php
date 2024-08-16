<?php

namespace App\Models;

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
}
