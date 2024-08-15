<?php

class CreateTable
{
    public static function postsTable($pdo)
    {
        try {
            $query = "CREATE TABLE IF NOT EXISTS`posts` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`date` varchar(255) NOT NULL,
`title` varchar(255) NOT NULL,
`summary` text NOT NULL,
`content` mediumtext NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=17;";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}
