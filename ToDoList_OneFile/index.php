<?php
session_start();
require "./fileAccess.php";

if (isset($_SESSION["taskList"])){
    $_SESSION["taskList"] = GetTaskList();
}

require "./header.php";
require "./main.php";
require "./footer.php";