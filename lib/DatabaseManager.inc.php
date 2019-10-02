<?php

class DatabaseManager {

    private $host = "";
    private $database = "";
    private $username = "";
    private $password = "";
    private $pdo;

    function __construct($host, $database, $username, $password) {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect() {
        $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
    }
}