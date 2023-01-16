<?php 
require_once("lib/connexion.php");
$allproduits = $connexion->query('SELECT * FROM produit ORDER BY id_produit DESC');
if(isset($_GET['r']) AND !empty($_GET['r'])){
    $recherche = htmlspecialchars($_GET['r']);
    $allproduits =$connexion->query ('SELECT * FROM produit WHERE titre  LIKE "%'.$recherche.'%" ORDER BY id_produit DESC');
}

?>