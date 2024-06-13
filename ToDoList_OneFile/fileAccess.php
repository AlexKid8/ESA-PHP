<?php
function SetTaskList(array $taskList, string $filePath = "./data/TaskList.csv"): array
{
    $file = fopen($filePath, "w+") or die("Impossible d'acceder au fichier");
    foreach ($taskList as $task){
            fputcsv($file, $task);
    }
    fclose($file);
    return $taskList;
}

function GetTaskList(string $filePath = "./data/TaskList.csv"): array
{
    $taskList = [];
    $file = fopen($filePath, "r") or die("Impossible d'acceder au fichier");
    while ($task = fgetcsv($file)) {
        $taskList[] = $task;
    }
    fclose($file);
    return $taskList;
}