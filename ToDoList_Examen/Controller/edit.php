<?php
session_start();

require "../Model/functions.php";

$taskList = $_SESSION["taskList"];
$editedId = $_POST["editedId"];
$editedContent = $_POST["editedContent"];
$newTaskList = [];

foreach ($taskList as $task){
    if($task[0] !== $editedId){
        $task[0] = (int) $task[0];
        $newTaskList[] = $task;
    } else {
        $newTaskList[] = [$editedId, $editedContent, $task[2]];
    }

$_SESSION["taskList"] = $newTaskList;
}

header("Location: {$_SERVER['HTTP_REFERER']}");
SaveTodos($newTaskList, "../Model/data/todos.csv");
exit;