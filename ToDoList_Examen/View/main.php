<?php
require "./View/modules/task.php";
?>

<main>
    <section>
        <form method="post" action="../Controller/add.php">
            <input type="text" name="newContent" placeholder="Type new task here">
            <input type="submit" value="Add task">
        </form>
    </section>

    <section>
        <?php
        if ($_SESSION["taskList"]){
            foreach ($_SESSION["taskList"] as $task){
                echo Task($task);
            }
        } else {
            echo "<h3> ToDoList is Empty </h3>";
        }
        ?>
    </section>
</main>
