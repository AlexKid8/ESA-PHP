<?php
session_start();

require "./fileAccess.php";

if($_POST["newContent"] !== ""){
    $taskList = $_SESSION["taskList"];
    $newId = ((int) end($taskList)[0]) + 1;
    $newContent = $_POST["newContent"];
    $newStatus = "";

    $taskList[] = [$newId, $newContent, $newStatus];

    $_SESSION["taskList"] = SetTaskList($taskList);
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;