<?php
/**
 *@author MaitrePylos <info@formatux.be>
 *@version 1.0
 *@license http://www.php.net/license/3_01.txt PHP License 3.01 
 *@link http://www.formatux.be
 *@task File available since Release 1.0
 *@todo petite caluclatrice
 *@param int $nombre1
 *@param int $nombre2
 *@param string $operation
 *@param boolean $ok
 *@param int $resultat
 */

$ok = false;

do { 
    $nombre1 = readline("Entrez un nombre : ");
    if (is_numeric($nombre1)) {
        $ok = true;
    } else {
        echo "J'ai demandé un nombre\n";
    }
}while ($ok === false);

$ok = false;

do { 
    $nombre2 = readline("Entrez un autre nombre : ");
    if (is_numeric($nombre2)) {
        $ok = true;
    } else {
        echo "Avoue.... c'est juste pour tester hein !\n";
    }
}while ($ok === false);

$ok = false;

do { 
    $operation = readline("Entrez l'opération à effectuer (+ - / * %) : ");
    if ($operation == "+" || $operation == "-" || $operation == "*" || $operation == "/" || $operation == "%") {
        $ok = true;
    } else {
        echo "Ce n'est pas une opération de base ! \n";
    }
}while ($ok === false);

if($operation == "/" && $nombre2 == 0) {
    echo "Division par zéro impossible\n";
    exit;
};

$resultat = match ($operation) {
    "+" => $nombre1 + $nombre2,
    "-" => $nombre1 - $nombre2,
    "*" => $nombre1 * $nombre2,
    "/" => $nombre1 / $nombre2,
    "%" => $nombre1 % $nombre2,
    default => "Opération incorrecte\n",
};

echo "Le résultat est : " . $resultat . "\n";

