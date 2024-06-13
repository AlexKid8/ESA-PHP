<?php
session_start();

require "./fileAccess.php";

$taskList = $_SESSION["taskList"];
$editedId = $_POST["editedId"];
$editedContent = $_POST["editedContent"];
$newTaskList = [];

foreach ($taskList as $task){
    if($task[0] !== $editedId){
        $newTaskList[] = $task;
    } else {
        $newTaskList[] = [$editedId, $editedContent, $task[2]];
    }

$_SESSION["taskList"] = $newTaskList;
}

header("Location: {$_SERVER['HTTP_REFERER']}");
SetTaskList($newTaskList);
exit;