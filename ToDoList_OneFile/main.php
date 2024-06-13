<?php
require "./task.php";
?>

<main>
    <section>
        <form method="post" action="./addTask.php">
            <input type="text" name="newContent" placeholder="Type new task here">
            <input type="submit" value="Add task">
        </form>
    </section>

    <section>
        <?php
        foreach ($_SESSION["taskList"] as $task){
            echo Task($task);
        }
        ?>
    </section>
</main>
