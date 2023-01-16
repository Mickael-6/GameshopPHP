<?php 
require_once("../lib/connexion.php");
  
if (!empty($_GET['id_produit'])) {

    $allproduits =$connexion->query ("SELECT * FROM `produit`");
    
}




?>