<?php
session_start();
require "./Model/functions.php";

if (!isset($_SESSION["taskList"])){
    $_SESSION["taskList"] = LoadTodos();
};

if (!isset($_SESSION["settings"])){
    $_SESSION["settings"] = LoadSettings();
};

require "./View/header.php";
require "./View/main.php";
require "./View/footer.php";


if ($_SESSION["settings"]["debug"]){
    echo "<h3>debug</h3>";
    echo " <pre>";
    echo "<h3>taskList</h3><pre> ";
    var_dump($_SESSION["taskList"]);
    echo " </pre>";
}