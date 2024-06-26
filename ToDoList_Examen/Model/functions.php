<?php
function SaveTodos(array $taskList, string $filePath = "./Model/data/todos.csv"): array
{
    $file = fopen($filePath, "w") or die("Unable to access file");
    foreach ($taskList as $task){
            fputcsv($file, $task);
    }
    fclose($file);
    return $taskList;
}

function LoadTodos(string $filePath = "./Model/data/todos.csv"): array
{
    $taskList = [];
    if ($file = fopen($filePath, "r")){
        while ($task = fgetcsv($file)) {
            $taskList[] = $task;
        }
        fclose($file);
        return $taskList;
    } else {
        return $taskList;
    }
}

function SaveSettings(array $settings, string $settingsFileName = "Settings", string $filePath = "./Model/data/"): void
{
    $settingsJSON = json_encode($settings, JSON_PRETTY_PRINT);
    file_put_contents($filePath . $settingsFileName . ".json", $settingsJSON)
    or die("Unable to access file");
}

function LoadSettings(string $settingsFileName = "Settings", string $filePath = "./Model/data/"):array
{
    if ($settingsJSON = file_get_contents($filePath . $settingsFileName . ".json")){
        return (array) json_decode($settingsJSON);
    } else{
        return [
            "orderByPriority" => true,
            "notDoneFirst" => true,
            "debug" => false
        ];
    }
}