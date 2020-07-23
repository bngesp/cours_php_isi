<?php include 'include/header.php';?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="row">
			<h3>Formulaire de Connexion</h3>
		</div>
		<div class="row">
			
			<?php 
				include 'class/Formulaire.php';
				include 'class/FormulaireLogin.php';
				$form = new FormulaireLogin("loginProcess.php", "post"); 
				echo $form->afficherLoginForm();
			?>
						
			</div>
			
		</div>
		<div class="col-md-2"></div>
	</div>
			
<?php include 'include/footer.php';?>
