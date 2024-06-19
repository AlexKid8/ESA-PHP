<?php
    session_start();
    require "../Model/functions.php";
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/settingsStyle.css">
    <link rel="icon" href="../icon/favicon-32x32.png">
    <title>Settings</title>
</head>
<body>
<header><h2>ToDoList Settings</h2></header>
<main>
    <form method="post" action="../Controller/settingsController.php">
        <?php

        foreach ($_SESSION["settings"] as $key => $value) {
            $checked = $value ? 'checked' : '';
            echo "
                    <div>
                    <input type='checkbox' name='" . $key . "' value='true' " . $checked .">
                    <label for=" . $key . ">" . $key . "</label>
                    </div>
                    ";
        }
        ?>
        <input type="submit" value="Save settings">
    </form>
    <br>
    <nav>
        <a href="../Controller/loadSettingsFromDisk.php">Load settings from disk</a>
        <a href="../Controller/sessionDestroy.php">Destroy SESSION</a>
        <a href="../index.php">Return to index</a>
    </nav>
</main>
<footer>
        <?php
        if ($_SESSION["settings"]["debug"]){
            echo "<br><h2>debug</h2>";
            echo " <pre>";
            foreach ($_SESSION as $key => $value){
                echo "<h3>" . $key . "</h3><pre> ";
                var_dump($value);
            }
            echo " </pre>";
        }
        ?>
</footer>
</body>
</html>
