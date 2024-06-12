<?php
require '../src/fileAccess.php';

$directoryModifier = '../';

if ($_POST['newTask'] !== ''){
    $taskList = GetTaskList($directoryModifier, "TaskList");
    $newTask[0] = end($taskList)[0] + 1;
    $newTask[1] = $_POST['newTask'];
    $taskList[] = $newTask;

    SetTaskList($directoryModifier,"TaskList", $taskList);
}

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
/*
?>
<pre>
<?php var_dump($taskList); ?>
</pre>
*/