<?php 
require 'layout/head.php';
require 'secure.php';

if($_GET['page'] && in_array($_GET['page'], $pages)){
    require 'todo/'.$_GET['page'].'.php';
}else{
    echo 'je suis dans l\'index';
    echo '<a href="?page=liste">Voir les tâches</a>'; 
}


require 'layout/footer.php';


