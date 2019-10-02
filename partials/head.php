<?php
session_start();

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
                </div>
            </nav>
        </header>
        <div class="container">