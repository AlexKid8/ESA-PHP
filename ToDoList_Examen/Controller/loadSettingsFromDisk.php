<?php
session_start();
require "../Model/functions.php";

$_SESSION["settings"] = LoadSettings("Settings", "../Model/data/");

header("Location: {$_SERVER['HTTP_REFERER']}");
exit();