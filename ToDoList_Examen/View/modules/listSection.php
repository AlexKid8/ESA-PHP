<?php
require "./View/modules/taskArticle.php";
$taskList = $_SESSION["taskList"];
function Compare($value1, $value2): int
{
    if ($value1[4] === $value2[4]){
        return 0;
    }
    return $value1[4] < $value2[4] ? -1 : 1;
}
usort($taskList, "Compare")
?>

<section>
    <?php
    if ($taskList){
        foreach ($taskList as $task){
            if ($task[2] === ""){
                echo Task($task);
            }
        }
        foreach ($taskList as $task){
                if ($task[2] === "done"){
                    echo Task($task);
                }
        }

    } else {
        echo "<h3> ToDoList is Empty </h3>";
    }
    ?>
</section>