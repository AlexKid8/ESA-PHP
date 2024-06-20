<?php
session_start();

require "../Model/functions.php";

$taskList = $_SESSION["taskList"];
$editedId = $_POST["editedId"];
$editedContent = $_POST["editedContent"];
$editedPriority = $_POST["editedPriority"];
$editedColor = $_POST["editedColor"];
$newTaskList = [];

foreach ($taskList as $task){
    if($task[0] !== $editedId){
        $newTaskList[] = $task;
    } else {
        $newTaskList[] = [$editedId, $editedContent, $task[2], $task[3], $editedPriority, $editedColor];
    }

$_SESSION["taskList"] = $newTaskList;
}

header("Location: {$_SERVER['HTTP_REFERER']}");
SaveTodos($newTaskList, "../Model/data/todos.csv");
exit;