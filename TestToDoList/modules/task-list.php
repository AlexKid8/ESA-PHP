<?php
require './src/fileAccess.php';
require './src/task.php';

$taskList = GetTaskList('',"TaskList");

echo "<section><h2>Task List</h2>";
foreach($taskList as $task){
    echo Task($task);
}
echo "</section>";
?>