<?php 

	require_once("connexionBD.php");

	$id_personel_Domaine_competence = isset($_GET['id_personel_Domaine_competence'])?$_GET['id_personel_Domaine_competence']:0;

	$requete=  "DELETE FROM Personel_Domaine_competence WHERE id_personel_Domaine_competence =? ";


	$params = array($id_personel_Domaine_competence);
	$resultat = $conn->prepare($requete);
	$resultat->execute($params);
	
	header('location:personel.php');

	
?>