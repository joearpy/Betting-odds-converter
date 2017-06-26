<?php

class DB {

    protected $connection;

    public function __construct() {

        try {
            $db = new PDO('mysql:host=localhost;dbname=odds_converter;charset=utf8', 'root', '');
            $this->connection = $db;
        } catch (PDOException $e) {
            return "Error!: " . $e->getMessage();
            die();
        }
    }

}
