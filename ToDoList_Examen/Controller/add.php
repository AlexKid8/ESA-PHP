<?php
session_start();

require "../Model/functions.php";

if($_POST["newContent"] !== ""){
    $taskList = $_SESSION["taskList"];
    $newId = ((int) end($taskList)[0]) + 1;
    $newId = time();
    $newContent = $_POST["newContent"];
    $newStatus = "";

    $taskList[] = [$newId, $newContent, $newStatus];

    $_SESSION["taskList"] = SaveTodos($taskList, "../Model/data/todos.csv");
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;