
<?php include "common/header.php";?>
    <h1 class="mt-5">Sticky footer with fixed navbar</h1>
    <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
    
    <pre>
        <?php 
        
            var_dump($_POST);
            // if(isset($_GET['nom'])){
            //     echo "Bonjour M. ".$_GET['prenom']. " ". $_GET['nom'];
            // }
        ?>
    </pre>
    <!-- 
        variable $_GET 
        _GET = array(
            'nom' => ,
            'prenom' => 
        )
     -->

    <form action="" method="post">
        <input type="text" name="nom" class="form-control">
        <input type="text" name="prenom" class="form-control">
        <button class="btn btn-primary" type="submit"> valider</button>
        <button class="btn btn-danger" type="reset"> Annuler</button>
    </form>
    
<!-- Submit => soumettre le formulaire
    reset => annuler les saisies
    button => à utiliser dans le js
 -->
<?php include "common/footer.php";?>