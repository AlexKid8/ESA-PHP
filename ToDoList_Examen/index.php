<?php
session_start();
require "./Model/functions.php";

if (isset($_SESSION["taskList"])){
    $_SESSION["taskList"] = GetTodos();
}

require "./View/header.php";
require "./View/main.php";
require "./View/footer.php";