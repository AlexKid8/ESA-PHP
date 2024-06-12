<?php
require '../src/fileAccess.php';

$directoryModifier = '../';

$taskList = GetTaskList($directoryModifier, "TaskList");

SetTaskList($directoryModifier,"TaskList", $taskList, $_POST['id']);

header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
/*
?>
<pre>
<?php var_dump($taskList); ?>
</pre>
*/