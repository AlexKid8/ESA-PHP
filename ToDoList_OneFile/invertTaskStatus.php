<?php
session_start();

require "./fileAccess.php";

$taskList = $_SESSION["taskList"];
$invertStatusId = $_POST["invertStatusId"];
$actualStatus = $_POST["actualStatus"];
$invertedStatus = $actualStatus ? "" : "done";
$newTaskList = [];

foreach ($taskList as $task){
    if($task[0] !== $invertStatusId){
        $newTaskList[] = $task;
    } else {
        $newTaskList[] = [$invertStatusId, $task[1], $invertedStatus];
    }

    $_SESSION["taskList"] = $newTaskList;
}

header("Location: {$_SERVER['HTTP_REFERER']}");
SetTaskList($newTaskList);
exit;