<?php
function SaveTodos(array $taskList, string $filePath = "./Model/data/todos.csv"): array
{
    $file = fopen($filePath, "w") or die("Impossible d'acceder au fichier");
    foreach ($taskList as $task){
            fputcsv($file, $task);
    }
    fclose($file);
    return $taskList;
}

function GetTodos(string $filePath = "./Model/data/todos.csv"): array
{
    $taskList = [];
    $file = fopen($filePath, "r") or die("Impossible d'acceder au fichier");
    while ($task = fgetcsv($file)) {
        $taskList[] = $task;
    }
    fclose($file);
    return $taskList;
}