<?php 
 $valeur_magic = 15; 
    if(isset($_POST['valeur'])){
        echo "vous avez saisi ".$_POST['valeur'];
        if($_POST['valeur'] > $valeur_magic ){
            echo "<br> la valeur est trop grande";
        }elseif ($_POST['valeur'] < $valeur_magic ){
            echo "<br> la valeur est tres petie";
        }elseif($_POST['valeur'] == $valeur_magic){
            echo "<br> Bravo !! vous avez gagné";
        }
    }

?>