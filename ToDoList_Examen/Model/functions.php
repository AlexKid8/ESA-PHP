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

function GetTodos(string $filePath = "./Model/data/todos.csv"): array
{
    $taskList = [];
    $file = fopen($filePath, "r") or die("Unable to access file");
    while ($task = fgetcsv($file)) {
        $taskList[] = $task;
    }
    fclose($file);
    return $taskList;
}

function SetSettings(array $settings, string $settingsFileName = "Settings", string $filePath = "../Model/data/"): void
{
    $settingsJSON = json_encode($settings);
    file_put_contents($filePath . $settingsFileName . ".json", $settingsJSON)
    or die("Unable to access file");;
}

function GetSettings(string $settingsFileName = "Settings", string $filePath = "../Model/data/"):array
{
    $settingsJSON = file_get_contents($filePath . $settingsFileName . ".json")
    or die("Unable to access file");

    return json_decode($settingsJSON);
}