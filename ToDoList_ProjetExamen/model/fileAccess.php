<?php
$directory = './data/';

function GetTaskList($directoryModifier, $listName){
    global $directory;
    $taskList = [];
    $file = fopen($directoryModifier . $directory . $listName . '.csv', "r") or die("Impossible d'acceder au fichier");
    while ($task = fgetcsv($file)) {
        $taskList[] = $task;
    }
    fclose($file);
    return $taskList;
}

function SetTaskList($directoryModifier, $listName, $taskList, $toDelete = null){
    global $directory;
    $file = fopen($directoryModifier . $directory . $listName . '.csv', "w") or die("Impossible d'acceder au fichier");
    foreach ($taskList as $task){
        if($task[0] !== $toDelete){
            fputcsv($file, $task);
        }
    }
    fclose($file);
}