<section>
<?php
require "./controller/task.php";

if($_SESSION["taskList"] === null){
    require "../../model/fileAccess.php";
    $_SESSION["taskList"] = GetTaskList();
    echo "<pre> \$_SESSION\[\"taskList\"\]" . var_dump($_SESSION["taskList"]) . "</pre>";
};
$taskList = $_SESSION["taskList"];
foreach ($taskList as $task){
    echo Task($task);
}
echo "<p>\$_SESSION\[\"taskList\"\] : </p><pre> " /*. var_dump($_SESSION["taskList"]) */. "</pre>";
?>
</section>
