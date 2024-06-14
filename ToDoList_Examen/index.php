<?php
session_start();
require "./Model/functions.php";

$_SESSION["taskList"] = GetTodos();

/* La lecture conditionelle pose probleme durant les tests, a creuser pour limiter les acces disques
 * if (!isset($_SESSION["taskList"])){
 * $_SESSION["taskList"] = GetTodos();
 * }
 */

require "./View/header.php";
require "./View/main.php";
require "./View/footer.php";