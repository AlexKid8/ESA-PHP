<?php
require "../model/fileAccess.php";

if ($_POST["newContent"] !== ""){
    echo "<pre>" . var_dump($_SESSION["taskList"]) . "</pre>";
    $taskList = $_SESSION["taskList"];
    $newContent = $_POST['newContent'];
    $newStatus = null;
    $newId = end($taskList)[0];
    $taskList[] = [$newId, $newContent, $newStatus];
    echo "<pre>" . var_dump($taskList) . "</pre>";
}

/* header("Location: {$_SERVER['HTTP_REFERER']}"); */