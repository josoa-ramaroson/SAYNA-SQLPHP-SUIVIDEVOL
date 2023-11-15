<?php
include('../app/Views/header.php');
?>

<div class="row">
    <h1> <?= $pays->name ?> </h1>
</div>
<div class="row">
    confirmez la suppression
    <form action=".?controller=Pays&action=deleteConfirm" method="POST">
        <input type="hidden" name="pays" value="<?= $pays->id; ?>" />;
        <input type="submit" value="supprimer le pays" />;
    </form>

    <!--lien de retour vers l'index-->
    <a href=".?controller=Pays&action=index">Retour</a>

</div>

<?php

include('../app/Views/footer.php');
