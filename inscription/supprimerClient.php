<?php 

	require_once("connexionBD.php");

	$id_client = isset($_GET['id_client'])?$_GET['id_client']:0;



	$requete = "DELETE FROM Client WHERE id_client=? ";
	$params = array($id_client);
	$resultat = $conn->prepare($requete);
	$resultat->execute($params);
	
	header('location:client.php');

	
?>