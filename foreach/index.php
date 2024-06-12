<?php

$tableau = array(2, 4, 6, 8, "chien", "chat", 10);

foreach ($tableau as $elt) :
    echo $elt . "<br>";
endforeach;

$livre = array(
    "titre" => "Titre",
    "auteur" => 'Auteur',
    "origine" => "Pays",
    "type" => "Type"
);

foreach ($livre as $clef => $valeur) :
    if($clef == 'titre'){
        $value = 'Titre de remplacement';
    }
    echo $clef . " : " . $valeur . "<br>";
endforeach;

foreach ($livre as $clef => &$valeur) :  //&$ pour passer par pointeur
    if($clef == 'titre'){
        $value = 'Titre de remplacement';
    }
    echo $clef . " : " . $valeur . "<br>";
endforeach;
echo '<pre>';
var_dump($livre);
echo '</pre>';