<?php 
require './models/secure.php';
require './views/layout/head.php';


if($_GET['page'] && in_array($_GET['page'], $pages)){

    require './views/'.$_GET['page'].'.php';
}else{
    require './views/main.php';
}



require './views/layout/footer.php';
