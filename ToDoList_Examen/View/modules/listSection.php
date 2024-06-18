<?php
require "./View/modules/taskArticle.php";
?>

<section>
    <?php
    if ($_SESSION["taskList"]){
        foreach ($_SESSION["taskList"] as $task){
            if ($task[2] === ""){
                echo Task($task);
            }
        }
        foreach ($_SESSION["taskList"] as $task){
            if ($task[2] === "done"){
                echo Task($task);
            }
        }
    } else {
        echo "<h3> ToDoList is Empty </h3>";
    }
    ?>
</section>