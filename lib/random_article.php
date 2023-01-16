<?php 

$randomproduit = $connexion->query ("SELECT * FROM produit ORDER BY RAND()LIMIT 1,3");
?>