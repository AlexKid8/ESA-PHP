<?php require_once 'layout/head.php'; ?>

<?php
$compteur = $_POST['number'];
?>
<form action="affiche.php?compteur=<?php echo $compteur ?>" method="post">
<?php for($i = 0; $i < $compteur; $i++): ?>
    <label>Nom - Prenom</label>
    <input type="text " name="<?php echo 'prenom'.$i ?>">
    <input type="text " name="nom<?php echo $i ?>">
<?php endfor; ?>
    <input type="hidden" name="compteur" value="<?php echo $compteur ?>">
    <input type="submit">
</form>

<?php require_once 'layout/footer.php';
