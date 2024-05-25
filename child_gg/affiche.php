<?php require_once 'layout/head.php'; ?>

<?php for($i = 0; $i < $_GET['compteur']; $i++): ?>
    <p>
        Nom : <?php echo $_POST['nom'.$i] ?><br>
        Prenom : <?php echo $_POST['prenom'.$i] ?>
    </p>
<?php endfor; ?>

<?php require_once 'layout/footer.php'; ?>
