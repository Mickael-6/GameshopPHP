<?php 
require_once("../lib/connexion.php");

// print_r($_POST);

if(!empty( $_POST )){


 

	$email = $_POST['email'];
	$mdp = $_POST['mdp'];
	$pseudo = $_POST['pseudo'];
	


	//  empty() verifie si une variable est vide
	// !empty() verifie si une variable est remplie


	if( !empty($email) && !empty($mdp)&& !empty($pseudo) ){

		// echo "Ok pour les champs !";


		if( strlen($mdp) >= 8  ){

			//  echo "Ok pour les MDP"; 
	
		


			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

			    // echo "L'adresse email '$email' est considérée comme valide.";


			    $sql_select_user = "SELECT `email` FROM `user` WHERE `email` = '$email'";
			    $table_select_user = $connexion->query($sql_select_user);


			    if( $table_select_user->rowCount() == 0 ) {

			    	// echo "0 correspondance, c'est bon !";

			    	$sql_insert_user = "INSERT INTO `user` (`email`, `mdp`, `pseudo`) VALUES ('$email', '$mdp', '$pseudo');";
			    	$connexion->query($sql_insert_user);


			    	// header( location ) fonction de redirection sur une page précise.
			    	header('Location: ../connexion/connexion.php');


			    }else{

			    	// echo "email déjà existant";

			    }



			}else{

				// echo "L'adresse email est invalie";
			}


		}else{

			 echo "Votre MDP est inferieur à 8 caractères";

		}

	}else{

		echo "Erreur ! Veuillez remplir tous les champs.";

	}
}
