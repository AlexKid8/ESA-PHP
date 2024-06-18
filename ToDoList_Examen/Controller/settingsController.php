<?php
require "../Model/functions.php";

$settings = [
    "orderBy" => $_POST["orderBy"] ?: "priority",
    "notDoneFirst" => $_POST["notDoneFirst"] ?: true,
    "theme" => $_POST["theme"] ?: "default",
    "listName" => $_POST["listName"] ?: "TaskList"
    ];

header("Location: {$_SERVER['HTTP_REFERER']}");

SetSettings($settings);
exit;
