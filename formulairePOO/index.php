<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page connexion</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header>
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="row">
					<h3>Formulaire de Connexion</h3>
				</div>
				<div class="row">

					<?php 
						include 'class/Formulaire.php';
							$form = new Formulaire("traitement.php", "post"); 
						?>
						<?= $form->header();?>
					<!-- <form action="<?=$form->getAction();?>" method="<?=$form->getMethod();?>"> -->
						<div class="form-group">
							<?php 
								$form->label("login");
								$form->input("text", "login"); 
								?>
							<!-- <label for="login" class="form-label">login</label>
							<input type="text" class="form-control"> -->
						</div>
						<div class="form-group">
						<?php	
							$form->label("le mot de pass");
							$form->input("password", "mdp"); 
							?>
							<!-- <label for="mdp" class="form-label">le mot de pass</label>
							<input type="password" class="form-control"> -->
						</div>
						<div class="form-group">
						<?php	
								$form->button("submit", "Connexion", "btn-success");
								$form->button("reset", "Annuler", "btn-primary");
							?>
							<!-- <button type="submit" class="btn btn-success"> Connexion</button>
							<button type="reset" class="btn btn-primary"> Annuler</button> -->
						</div>
						<?= $form->footer();?>
				<!-- 	</form> -->
				</div>

			</div>
			<div class="col-md-2"></div>
		</div>

	</header>
</body>
</html>


