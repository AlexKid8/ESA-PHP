<?php
session_start();
if(!$_SESSION['compteurSession']){
    $_SESSION['compteurSession'] = 0;
}
echo session_status();
$_SESSION['compteurSession'] = $_SESSION['compteurSession'] + 1;
echo "nombre de visites Session : " . $_SESSION['compteurSession'];

//dump die (dd)