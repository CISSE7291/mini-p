<?php
  $nom = $_POST['nom'];
  $prénom = $_POST['prenom'];
  $naissance = $_POST['date_de_naissance'];
  require'connexion-mini-projet.php';
  $requete="INSERT INTO `inscription`(nom, prénom, date_de_naissance) VALUES('$nom','$prénom','$naissance')";
  $query=mysqli_query($conn,$requete);
  if(isset($query)){
	echo"valider";
  }
  else{
	echo"erreur";
  }
?>
