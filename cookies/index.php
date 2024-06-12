<?php

setcookie('compteurVisites', ++$_COOKIE['compteurVisites']);
echo "nombre de visites : ". $_COOKIE['compteurVisites'];