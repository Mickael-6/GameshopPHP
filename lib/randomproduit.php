<?php 
require_once("../lib/connexion.php");
    $randomproduit = $connexion->query ("SELECT * FROM produit WHERE titre ");
?>