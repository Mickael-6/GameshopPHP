<?php 
require_once("../lib/connexion.php");
if (!empty($_POST)) {
$email = $_POST['email'];
$mdp = $_POST['mdp'];


if (!empty($email)&& !empty($mdp) ) {
    $sql_select_user = "SELECT * FROM `user` WHERE `email` = '$email' AND `mdp` = '$mdp'";
    $table_select_user = $connexion->query($sql_select_user);
    $resultat_user = $table_select_user->fetchAll(PDO::FETCH_ASSOC);
    
    
    
    
    if($table_select_user->rowCount() > 0) {

        echo "GG ! on a une correspondance !";

        session_unset();

        $_SESSION['id_user'] = $resultat_user[0]['id_user'];

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mdp'] = $_POST['mdp'];
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header("Location: ../index.php");
    } else {

        echo "Login ou mot de passe incorrect";
    }
}
}









?>