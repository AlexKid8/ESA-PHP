<?php
require "./View/modules/task.php";
?>

<main>
    <section>
        <form method="post" action="../Controller/add.php">
            <input type="text" name="newContent" placeholder="Type new task here" required>
            <input type="submit" value="&#x2795">
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
