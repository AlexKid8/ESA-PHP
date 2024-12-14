<?php 
require './controllers/liste_taches.php';
?>

<?php foreach ($data['taches'] as $tache) : ?>
    <li>
        <a href="tache.php?id=<?= $tache['id'] ?>">
            <?= $tache['nom'] ?>
        </a>
    </li>
<?php endforeach ?>

<li><a href="index.php">Accueil</a></li>
