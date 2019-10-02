<?php

class User {
    
    private $username;
    private $email;
    private $database;
    private $id;
    private $usergroup;

    function __construct($uid, $database) {
        $this->database = $database;
        $this->id = $uid;
        foreach($this->database->query("SELECT * FROM  `users` WHERE id=" . $uid . ";") as $row) {
            $this->username = $row["username"];
            $this->email = $row["email"];
            $this->usergroup = $row["usergroup"];
        }
    }

    public function hasPermission($key) {
        $res = $this->database->query("SELECT key, has FROM `permissions` WHERE usergroupId=" . $this->usergroup . " AND key='" . $key . "';");
        if(count($res) > 0) {
            if($res["has"] == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}