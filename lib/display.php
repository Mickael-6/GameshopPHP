<?php




 if( !empty($_POST) ){

 	// echo $_POST['toggle_display'];
 	// si = 0, on considère que c'est masquer
 	// si = 1, on considère que c'est afficher


 	$display = $_POST['toggle_display'];
 	$id_produit = $_POST['id_produit'];

 	if( $display == 0 ){

 		$sql_update_display = "UPDATE `produit` SET `display` = 1 WHERE `id_produit` = $id_produit";
 		$connexion->query($sql_update_display);

 	}else{

 		$sql_update_display = "UPDATE `produit` SET `display` = 0 WHERE `id_produit` = $id_produit";
 		$connexion->query($sql_update_display);
 	}



 
 }


?>