<?php

class Comments {

    public static function insertComment($c, $id) {
        $query = "INSERT INTO `comments` ( `user_id`, `news_id`, `text`, `date`) VALUES ( '2', '" . $id . "', '" . $c . "', CURRENT_TIMESTAMP); ";
        $db = new Database();
        $q = $db->executeRun($query);
        return $q;
    }

}