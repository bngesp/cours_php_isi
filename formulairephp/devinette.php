<?php include "common/header.php" ; 
   
?>

<h1 class="mt-5">Devinette</h1>


<form action="traitement/traitementDevinette.php" method="post">
    <input type="number" name="valeur">
    <button class="btn btn-success"  type="submit"> Tester</button>
    <button class="btn btn-defaut" type="reset"> Annuler</button>
</form>

<?php include "common/footer.php"; ?>