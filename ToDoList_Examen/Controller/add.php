<?php
session_start();

require "../Model/functions.php";

if($_POST["newContent"] !== ""){
    $taskList = $_SESSION["taskList"];
    $newId = time();
    $newContent = $_POST["newContent"];
    $newPriority = $_POST["newPriority"];

    $taskList[] = [$newId, $newContent, "", "", $newPriority];

    $_SESSION["taskList"] = SaveTodos($taskList, "../Model/data/todos.csv");
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;