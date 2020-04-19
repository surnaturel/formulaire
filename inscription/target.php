<!DOCTYPE html>
<html>
	<head>
		<title>insertion</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$serveur = "localhost";
			$name_utilisateur = 'franck';
			$mot_de_passe= "123";
			echo "je suis connecter <br/>";

			try{
				$conn = new PDO("mysql:host=$serveur;dbname=formulaire_accouchement",
					$name_utilisateur, $mot_de_passe);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				

				$req = $conn->prepare(
					"INSERT INTO Client(nom_client,nom_jeune_fille,prenom_client,date_naissance_client,code_postal,ville,tel_client,email_client)
						VALUES (
						:nom_client,:nom_jeune_fille,:prenom_client,:date_naissance_client,:code_postal,:ville,:tel_client,:email_client)"
				);
				$req->bindparam(':nom_client', $nom_client);
				$req->bindparam(':nom_jeune_fille', $nom_jeune_fille);
				$req->bindparam(':prenom_client', $prenom_client);
				$req->bindparam(':date_naissance_client', $date_naissance_client);
				$req->bindparam(':code_postal', $code_postal);
				$req->bindparam(':ville', $ville);
				$req->bindparam(':tel_client', $tel_client);
				$req->bindparam(':email_client', $email_client);
				
				$nom_client = $nom_jeune_fille = $prenom_client = $date_naissance_client = $code_postal = $ville = $tel_client = $email_client = "";
				function securisation($donnee){
					$donnee = trim($donnee);
					$donnee = stripslashes($donnee);
					$donnee = strip_tags($donnee);
					return $donnee;
				}
				$nom_client = securisation($_POST['nom']);
				$nom_jeune_fille = securisation($_POST['nom_jeune']);
				$prenom_client = securisation($_POST['prenom']);
				$date_naissance_client = securisation($_POST['date_naissance']);
				$code_postal = securisation($_POST['code_postal']);
				$ville = securisation($_POST['ville']);
				$tel_client = securisation($_POST['telephone']);
				$email_client = securisation($_POST['email']);
			
				$req->execute();

				echo 'valeur bien INSERER';
			}
			catch(PDOException $e){
				echo 'Echec : ' .$e->getMessage();
			}
			?>
	</body>
</html>