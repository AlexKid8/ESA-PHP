<?php
session_start();

require "../Model/functions.php";

$taskList = $_SESSION["taskList"];
$deleteId = $_POST["deleteId"];
$newTaskList = [];

foreach ($taskList as $task){
    if($task[0] !== $deleteId){
        $newTaskList[] = $task;
    }
}

$_SESSION["taskList"] = SaveTodos($newTaskList, "../Model/data/todos.csv");

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;