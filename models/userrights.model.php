<?php
require_once "connection.php";

class ModelUserRights {
    static public function mdlGetUserCredentials($table, $item, $value) {
        $stmt = (new Connection)->connect()->prepare(
            "SELECT * FROM $table WHERE $item = :item"
        );
        $stmt->bindParam(":item", $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}