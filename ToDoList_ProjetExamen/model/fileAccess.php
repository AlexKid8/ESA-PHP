<?php
$dir = './model/data/';

/**
 * @param $dirMod
 * path modifier for execution outside the root directory
 * @param $fileName
 * name of the file on disk
 * @return array|void
 */
function GetTaskList($dirMod, $fileName){
    global $dir;
    $_SESSION["taskList"] = [];

    $file = fopen($dirMod . $dir . $fileName . '.csv', "w+") or die("Impossible d'acceder au fichier");
    while ($task = fgetcsv($file)) {
        $_SESSION["taskList"][] = $task;
    }
    fclose($file);
    return $_SESSION["taskList"];

}

/**
 * @param $dirMod
 * path modifier for execution outside the root directory
 * @param $fileName
 * name of the file on disk
 * @param $taskList
 * array containing the task list
 * @param $target
 * id of a task to edit or delete
 * @param $content
 * edited content of the task
 * @param $done
 * "done" if the task has been completed
 * @return void
 *
 * if no target set, just write the task list as is
 * if a target is set and no content nor done status, delete the task
 * if a target is set and content, update task content
 * if a target is set with no content and "done", update task status
 */
function SetTaskList($dirMod, $fileName, $taskList, $target = null, $content = null, $done = null): void
{
    global $dir;
    $file = fopen($dirMod . $dir . $fileName . '.csv', "w") or die("Impossible d'acceder au fichier");
    foreach ($taskList as $task){
        if($task[0] !== $target){
            fputcsv($file, $task);
        }
    }
    fclose($file);
}