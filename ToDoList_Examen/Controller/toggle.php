<?php
session_start();

require "../Model/functions.php";

$taskList = $_SESSION["taskList"];
$invertStatusId = $_POST["invertStatusId"];
$actualStatus = $_POST["actualStatus"];
$invertedStatus = $actualStatus ? "" : "done";
$newTaskList = [];

foreach ($taskList as $task){
    if($task[0] !== $invertStatusId){
        $newTaskList[] = $task;
    } else {
        $newTaskList[] = [$invertStatusId, $task[1], $invertedStatus, time(), $task[4], $task[5]];
    }

    $_SESSION["taskList"] = $newTaskList;
}

header("Location: {$_SERVER['HTTP_REFERER']}");
SaveTodos($newTaskList, "../Model/data/todos.csv");
exit;