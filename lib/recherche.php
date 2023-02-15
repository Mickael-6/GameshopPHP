<?php 
require_once("lib/connexion.php");
$allproduits = $connexion->query('SELECT * FROM produit  ORDER BY RAND()LIMIT 1,9');
if(isset($_GET['r']) AND !empty($_GET['r'])){
    $recherche = htmlspecialchars($_GET['r']);
    $allproduits =$connexion->query ('SELECT * FROM produit WHERE titre  LIKE "%'.$recherche.'%"  ORDER BY RAND()LIMIT 1,9');
}

?>