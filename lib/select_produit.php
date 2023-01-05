<?php 
 $sqlProduit ="SELECT * FROM `produit`";
 $produit_table = mysqli_query($connexion, $sqlProduit);
 $produit_resultat = mysqli_fetch_all($produit_table,MYSQLI_ASSOC);


?>