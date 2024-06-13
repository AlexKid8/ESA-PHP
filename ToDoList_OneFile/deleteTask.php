<?php
session_start();

require "./fileAccess.php";

if($_POST["deleteId"] !== ""){
    $taskList = $_SESSION["taskList"];
    $deleteId = $_POST["deleteId"];
    $newTaskList = [];

    foreach ($taskList as $task){
        if($task[0] !== $deleteId){
            $newTaskList[] = $task;
        }
    }

    $_SESSION["taskList"] = SetTaskList($newTaskList);
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;