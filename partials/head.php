<?php
if(!isset($bootstrap_css)) {
    $bootstrap_css = "https://libs.digitalpiloten.org/bootstrap/4.3.1/css/bootstrap.min.css";
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