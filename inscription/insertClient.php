<?php 

	require_once("connexionBD.php");

	$nom_client = isset($_POST['nom_client'])?$_POST['nom_client']:'';
	$nom_jeune_fille = isset($_POST['nom_jeune_fille'])?$_POST['nom_jeune_fille']:'';
	$prenom_client = isset($_POST['prenom_client'])?$_POST['prenom_client']:'';
	$email_client = isset($_POST['email_client'])?$_POST['email_client']:'';
	$tel_client = isset($_POST['tel_client'])?$_POST['tel_client']:'';
	$ville = isset($_POST['ville'])?$_POST['ville']:'';
	$code_postal = isset($_POST['code_postal'])?$_POST['code_postal']:'';
	$date_naissance_client = isset($_POST['date_naissance_client'])?$_POST['date_naissance_client']:'';
	$securite_sociale = isset($_POST['securite_sociale'])?$_POST['securite_sociale']:'';
	$cmu= isset($_POST['cmu'])?$_POST['cmu']:"";
	$ame=isset($_POST['ame'])?$_POST['ame']:"";
	$vous_savez_pas_beneficiaire= isset($_POST['vous_savez_pas_beneficiaire'])?$_POST['vous_savez_pas_beneficiaire']:"";
	$diabete=isset($_POST['diabete'])?$_POST['diabete']:"";
	$embolie_pulmonaire_phlebite=isset($_POST['enbolie_pul_phe'])?$_POST['enbolie_pul_phe']:"";
	$hypertention_arterielle=isset($_POST['hypertention_are'])?$_POST['hypertention_are']:"";
	$probleme_cardiaques = isset($_POST['probleme_cardiaques'])?$_POST['probleme_cardiaques']:"";
	$diagnostic_precedente = isset($_POST['diagnostic'])?$_POST['diagnostic']:"";
	$fausses_couche_4=isset($_POST['fausses_couche_4'])?$_POST['fausses_couche_4']:"";
	$cerclage_col=isset($_POST['cerclage_col'])?$_POST['cerclage_col']:"";
	$menace_AP=isset($_POST['menace_AP'])?$_POST['menace_AP']:"";
	$diabete_gestationel=isset($_POST['diabete_gestationel'])?$_POST['diabete_gestationel']:"";
	$hypertension_arterielle_precedent=isset($_POST['hyp_art_antecedent'])?$_POST['hyp_art_antecedent']:"";
	$pre_eclampsie=isset($_POST['pre_eclampsie'])?$_POST['pre_eclampsie']:"";
	$hemotagie_delivrance=isset($_POST['hemotagie_delivrance'])?$_POST['hemotagie_delivrance']:"";
	$hra= isset($_POST['hra'])?$_POST['hra']:"";
	$cerclage_col_actuelle=isset($_POST['cerclage_col_actuelle'])?$_POST['cerclage_col_actuelle']:"";
	$menace_ap_actuelle=isset($_POST['menace_ap_actuelle'])?$_POST['menace_ap_actuelle']:"";
	$diabete_gestationel_actuelle=isset($_POST['diabete_gestationel_actuelle'])?$_POST['diabete_gestationel_actuelle']:"";
	$hypertension_arterielle_actuelle=isset($_POST['hyp_art_actuelle'])?$_POST['hyp_art_actuelle']:"";
	$pre_eclampsie_actuelle=isset($_POST['pre_eclampsie_actuelle'])?$_POST['pre_eclampsie_actuelle']:"";
	$commentaire_autre_maladie=isset($_POST['autre_maladie'])?$_POST['autre_maladie']:"";
	$commentaire_grossesse_precedente=isset($_POST['autre_precision'])?$_POST['autre_precision']:"";
	$prise_charge_grossesse_actuelle=isset($_POST['prise_charge[]'])?$_POST['prise_charge[]']:"";
	$quelle_pathologie=isset($_POST['pathologie'])?$_POST['pathologie']:"";
	$commentaire_grossesse_actuelle=isset($_POST['autre_precision_actuelle'])?$_POST['autre_precision_actuelle']:"";
	$traitement_actuel=isset($_POST['traitement_actuel'])?$_POST['traitement_actuel']:"";
	$drepanocytose=isset($_POST['drepanocytose'])?$_POST['drepanocytose']:"";
	$depression=isset($_POST['depression'])?$_POST['depression']:"";
	$medicament_deperession=isset($_POST['medicament_deperession'])?$_POST['medicament_deperession']:"";
	$nb_accouchement=isset($_POST['nb_accouchement'])?$_POST['nb_accouchement']:0;
	$avez_accouche_SHPH=isset($_POST['avez_vous_accou'])?$_POST['avez_vous_accou']:"";
	$date_accouchement_SHPH=isset($_POST['date_accouchement_SHPH'])?$_POST['date_accouchement_SHPH']:"";
	$avez_vous_des_fausses_couches=isset($_POST['avez_vous_accou_F'])?$_POST['avez_vous_accou_F']:"";
	$nombre_fausse_couche=isset($_POST['nombre_fausse_couche'])?$_POST['nombre_fausse_couche']:0;
	$accouchement_avant_8_mois=isset($_POST['ac_avant_8_mois'])?$_POST['ac_avant_8_mois']:"";
	$preciser_terme=isset($_POST['preciser_terme'])?$_POST['preciser_terme']:0;
	$prise_en_charge_neonatalogie_mois=isset($_POST['prise_en_charge_neonatalogie_mois'])?$_POST['prise_en_charge_neonatalogie_mois']:"";
	$ac_avant_8_mois_poid_bb=isset($_POST['ac_avant_8_mois_poid_bb'])?$_POST['ac_avant_8_mois_poid_bb']:0;
	$cesarienne=isset($_POST['cesarienne'])?$_POST['cesarienne']:"";
	$nb_bb=isset($_POST['nb_bb'])?$_POST['nb_bb']:"";
	$date_accouchement_prevue=isset($_POST['date_accouchement_prevue'])?$_POST['date_accouchement_prevue']:"";
	$date_debut_grossesse=isset($_POST['date_debut_grossesse'])?$_POST['date_debut_grossesse']:"";
	//date_add($date_debut_grossesse, date_interval_create_from_date_string("9 months"));
	//$date_accouchement_prevue= date_format($date_debut_grossesse, 'Y-m-d');

	$requete = "INSERT INTO Client (nom_client,nom_jeune_fille,prenom_client,email_client,tel_client,ville,code_postal,date_naissance_client,securite_sociale,cmu,ame,vous_savez_pas_beneficiaire,diabete,embolie_pulmonaire_phlebite,hypertention_arterielle,probleme_cardiaques,diagnostic_precedente,fausses_couche_4,cerclage_col,menace_AP,diabete_gestationel,hypertension_arterielle_precedent,pre_eclampsie,hemotagie_delivrance,hra,cerclage_col_actuelle,menace_ap_actuelle,diabete_gestationel_actuelle,hypertension_arterielle_actuelle,pre_eclampsie_actuelle,commentaire_autre_maladie,commentaire_grossesse_precedente,prise_charge_grossesse_actuelle,quelle_pathologie,commentaire_grossesse_actuelle,traitement_actuel,drepanocytose,depression,medicament_deperession,nb_accouchement,avez_accouche_SHPH,date_accouchement_SHPH,avez_vous_des_fausses_couches,nombre_fausse_couche,accouchement_avant_8_mois,preciser_terme,prise_en_charge_neonatalogie_mois,ac_avant_8_mois_poid_bb,cesarienne,nb_bb,date_accouchement_prevue,date_debut_grossesse) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$params = array($nom_client,$nom_jeune_fille,$prenom_client,$email_client,$tel_client,$ville,$code_postal,$date_naissance_client,$securite_sociale,$cmu,$ame,$vous_savez_pas_beneficiaire,$diabete,$embolie_pulmonaire_phlebite,$hypertention_arterielle,$probleme_cardiaques,$diagnostic_precedente,$fausses_couche_4,$cerclage_col,$menace_AP,$diabete_gestationel,$hypertension_arterielle_precedent,$pre_eclampsie,$hemotagie_delivrance,$hra,$cerclage_col_actuelle,$menace_ap_actuelle,$diabete_gestationel_actuelle,$hypertension_arterielle_actuelle,$pre_eclampsie_actuelle,$commentaire_autre_maladie,$commentaire_grossesse_precedente,$prise_charge_grossesse_actuelle,$quelle_pathologie,$commentaire_grossesse_actuelle,$traitement_actuel,$drepanocytose,$depression,$medicament_deperession,$nb_accouchement,$avez_accouche_SHPH,$date_accouchement_SHPH,$avez_vous_des_fausses_couches,$nombre_fausse_couche,$accouchement_avant_8_mois,$preciser_terme,$prise_en_charge_neonatalogie_mois,$ac_avant_8_mois_poid_bb,$cesarienne,$nb_bb,$date_accouchement_prevue,$date_debut_grossesse);
	$resultat = $conn->prepare($requete);
	$resultat->execute($params);

	header('location:client.php');
?>