<?php
require "../Model/functions.php";

session_start();
session_destroy();

header("Location: {$_SERVER['HTTP_REFERER']}");
exit();