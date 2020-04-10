<?php  include 'common/header.php';?>


<h1 class="mt-5">Page connect</h1>

<?php 

    if(isset($_POST['login'])){
        echo "<h2> Bonjour M ".$_POST['login']."</h2>";
    }
?>

<form action="" method="post">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="login" placeholder="entrer votre login">
            <button class="btn btn-primary" type="submit"> Connection</button>
            <button class="btn btn-danger" type="reset"> Annuler</button>
        </div>
        <div class="col-md-3"></div>
    </div>
</form>
<?php 
include 'common/footer.php';
?>