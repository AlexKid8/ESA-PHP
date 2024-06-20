<?php
session_start();

require "../Model/functions.php";

if($_POST["newContent"] !== ""){
    $taskList = $_SESSION["taskList"];
    $newId = time();
    $newContent = $_POST["newContent"];
    $newPriority = $_POST["newPriority"];
    $newColor = (int)$newPriority === 1 ? "#ff0000" : "#ffff00";
    $newColor = (int)$newPriority === 3 ? "#00ff00" : $newColor;

    $taskList[] = [$newId, $newContent, "", "", $newPriority, $newColor];

    $_SESSION["taskList"] = SaveTodos($taskList, "../Model/data/todos.csv");
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;