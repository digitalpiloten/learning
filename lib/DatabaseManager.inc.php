<?php

class DatabaseManager {

    private $host = "";
    private $database = "";
    private $username = "";
    private $password = "";
    private $pdo;
    private $queryNum = 0;

    function __construct($host, $database, $username, $password) {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect() {
        $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
    }

    public function query($sql) {
        $queryNum++;
        return($this->pdo->query($sql));
    }

    public function getQueryNum() {
        return($this->queryNum);
    }
}