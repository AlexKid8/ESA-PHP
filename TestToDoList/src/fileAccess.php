<?php
$directory = './data/';

function GetTaskList($directoryModifier, $listName){
    global $dir;
    $taskList = [];
    $file = fopen($directoryModifier . $dir . $listName . '.csv', "r") or die("Impossible d'acceder au fichier");
    while ($task = fgetcsv($file)) {
        $taskList[] = $task;
    }
    fclose($file);
    return $taskList;
}

function SetTaskList($directoryModifier, $listName, $taskList, $toDelete = null){
    global $dir;
    $file = fopen($directoryModifier . $dir . $listName . '.csv', "w") or die("Impossible d'acceder au fichier");
    foreach ($taskList as $task){
        if($task[0] !== $toDelete){
            fputcsv($file, $task);
        }
    }
    fclose($file);
}