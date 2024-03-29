<?php
session_start();

require_once($_SERVER["DOCUMENT_ROOT"] . "/config.inc.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/lib/DatabaseManager.inc.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/lib/SettingsManager.inc.php");

$database = new DatabaseManager(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USERNAME, MYSQL_PASSWORD);
$database->connect();

$settingsManager = new SettingsManager($database);

$loggedin = false;
if(isset($_SESSION["userId"])) {
    $loggedin = true;
} else {
    $loggedin = false;
}

if(!isset($bootstrap_css)) {
    $bootstrap_css = "https://libs.digitalpiloten.org/bootstrap/4.3.1/css/bootstrap.min.css";
}
if(!isset($bootstrap_js)) {
    $bootstrap_js = "https://libs.digitalpiloten.org/bootstrap/4.3.1/js/bootstrap.min.js";
}
if(!isset($_title)) {
    $_title = "DigitalPiloten";
} else {
    $_title = $_title . " | DigitalPiloten";
}
if(!isset($_robots)) {
    $_robots = "index";
}
if(!isset($_description)) {
    $_description = "";
}
if(!isset($_keywords)) {
    $_keywords = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $_title ?></title>
        <meta name="title" content="<?= $_title ?>">
        <meta name="robots" content="<?= $_robots ?>">
        <meta name="description" content="<?= $_description ?>">
        <meta name="keywords" content="<?= $_keywords ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="<?= $bootstrap_css ?>">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">DigitalPiloten</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Link</a>
                        </li>
                    </ul>
                    <div class="leftButtons">
                        <?php
                            if($loggedin) {
                                ?>
                                    <a href="/courses" class="btn btn-primary">
                                        Kurse
                                    </a>
                                    &nbsp;
                                    <a href="/logout" class="btn btn-secondary">
                                        Logout
                                    </a>
                                <?php
                            } else {
                                ?>
                                    <a href="/login" class="btn btn-primary">
                                        Login
                                    </a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">