<?php 
  if (!empty($_SESSION)) {  
	$id = $_SESSION['id_user'];

	$sql_select_user_by_id = "SELECT * FROM `user` WHERE `id_user` = '$id'";
	$table_user_by_id =  $connexion->query($sql_select_user_by_id);
	$resultat_user_by_id = $table_user_by_id->fetch(PDO::FETCH_ASSOC);
	 } 
    ?>