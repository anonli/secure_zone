				<div class="container" style="text-align: center; margin-top: 10%;">

					<header>
						<h3>Connexion</h3>
					</header>

					<form style="" method="post" action="index.php?page=login">
						<div class="input-group">
	  						<span class="input-group-addon" id="basic-addon1">Email</span>
	 						<input type="text" class="form-control" placeholder="E-mail" name="mail" aria-describedby="basic-addon1">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Mot de passe</span>
	 						<input type="text" class="form-control" placeholder="***********" name="mdp" aria-describedby="basic-addon1">
						</div>
						<br>
						<br>
						<button type="submit" class="btn btn-default" name="connexion">Connexion</button>
					</form>

					<?php

						if ( isset($_POST["connexion"]) ) {

							$mail = $_POST['mail'];
							$mdp    = $_POST['mdp'];

							$uneConnexion->login($mail, $mdp);

						}

					?>

				</div>
