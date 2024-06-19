<?php
session_start();
require "../Model/functions.php";

$settings = [
    "orderByPriority" => (bool)$_POST["orderByPriority"],
    "notDoneFirst" => (bool)$_POST["notDoneFirst"],
    "debug" => (bool)$_POST["debug"]
    ];

$_SESSION["settings"] = $settings;

if ($_SESSION["settings"]["debug"]){
    $_SESSION["POST"] = $_POST;
    $_SESSION["GET"] = $_GET;
    $_SESSION["COOKIE"] = $_COOKIE;
    $_SESSION["ENV"] = $_ENV;
    $_SESSION["FILES"] = $_FILES;
    $_SESSION["REQUEST"] = $_REQUEST;
    $_SESSION["http_response_header"] = $http_response_header;
    $_SESSION["SERVER"] = $_SERVER;
}

header("Location: {$_SERVER['HTTP_REFERER']}");

SaveSettings($settings, "Settings", "../Model/data/");
exit;
