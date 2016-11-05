<?php
	
	class Connexion 
		{

			private $pdo;
			private $table;

			public function __construct ()
				{
					$this->pdo = null;
					try
					{
						$this->pdo = new PDO ("mysql:host=localhost;dbname=secure_login", "sec_user", "cnf_pk8f945");
					}
					catch (Exception $exp)
					{
						echo "Erreur de connexion à la bdd";
					}
				}

			public function login($mail, $mdp)
				{
							$pass = md5($mdp);
							$requete = "SELECT * FROM members WHERE email = '".$mail."' AND password = '".$pass."';";
							$connexion = $this->pdo;
							$resultat = $connexion->query($requete);

							if($resultat == false)
								{
									echo "<center>
										<p>
											<br> Echec de la connexion : pseudo ou mot de passe incorrect.
										</p>		
									</center>";
								}
							else
								{
									$user_connected = $resultat->fetchAll()[0];
									// On stock notre utilisateur en session
									$_SESSION["user"] = $user_connected;
									$_SESSION["pseudo"] = $user_connected["username"];
									// On appel la page d'index protégé
									echo "<meta http-equiv='refresh' content='0;URL=?page=home'>";
								}
							
				}

		}
?>				