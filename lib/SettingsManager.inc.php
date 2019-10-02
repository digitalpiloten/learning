<?php

class SettingsManager {

    private $database;

    function __construct($database) {
        $this->database = $database;
    }
}