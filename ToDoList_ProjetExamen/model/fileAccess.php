<?php
$dir = '/model/data/';

/**
 * @param string $dirMod
 * path modifier for execution outside the root directory (. by default)
 * @param string $fileName
 * name of the file on disk
 * @return array|void
 */
function GetTaskList(string $fileName = "TaskList", string $dirMod = "."){
    global $dir;
    $filePath = $dirMod . $dir . $fileName . ".csv";
    $taskList = [];

    $file = fopen($filePath, "w+") or die("Impossible d'acceder au fichier");
    while ($task = fgetcsv($file)) {
        $taskList[] = $task;
    }
    fclose($file);
    return $taskList;

}

/**
 * @param string $dirMod
 * path modifier for execution outside the root directory (. by default)
 * @param string $fileName
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
function SetTaskList(string $dirMod = ".", string $fileName = "TaskList", array $taskList, string $target = null, string $content = null, string $done = null): void
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