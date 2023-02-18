<?php 
session_start();
require_once("lib/connexion.php");
require_once("lib/recherche.php");
require_once("lib/select_user_by_pseudo.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameshop</title>
    <link rel="stylesheet" href="homestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41a8ece914.js" crossorigin="anonymous"></script>
  
</head>
<body>
<nav>
 <h1>GAMESHOP</h1> 
 <?php if (empty($_SESSION)) {  ?>
 <div class="allbutton">
 <button  class="connexion" onclick="window.location.href='connexion/connexion.php'"><i class="fa-solid fa-user"></i> Connexion</button>
 <button class="inscription" onclick="window.location.href='inscription/inscription.php'"><i class="fa-solid fa-scroll"></i> Inscription</button>
 </div>
 <?php } else { ?>
  <p class="bienvenue"><?php echo $resultat_user_by_id['pseudo']?><i class="fa-solid fa-user-check"></i></p>
  <button  class="deconnexion" onclick="window.location.href='lib/deconnexion.php'" ><i class="fa-solid fa-circle-minus"></i> Deconnexion</button>
<?php } ?>
</nav>

<div class="banniere">
 <h2>GAMESHOP</h2> 
 <p class="soustitre">Jeux PC, PS5, PS4, XBOX, Switch.</p>
</div>

<form method="GET" class="form"> 
 <div class="inputGroup">
  <button type="input"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
  <input type="search" name="r" type="text" required="" autocomplete="off" >
  <label for="name">Recherche Jeux</label>
 </div>
</form>

<div class="allcard">
 <?php 
    if($allproduits->rowCount() > 0){
     while($produit = $allproduits->fetch()) { ?>
     <div class="cardparent">
       <div class="card">
       <div class="promo"> <p class="pourcent"><?php echo $produit['pourcent']?>%</p></div>
       <img class="imagejeu" src="assets/<?php echo $produit['image'];?>" alt="">
       <a href="single_article/index.php?id_produit=<?php echo $produit['id_produit']; ?>">
       <video class="video" muted loop  src="<?php echo $produit['video']?>;" type="video/webm"></video>
       </a>
       </div>
       <div class="information"><p class="titre"><?php echo $produit['titre'];?></p><p class="price"><?php echo $produit['price'];?>€</p></div>
     </div>     
<?php } 
     }else{ ?>
      <p>aucune utilisateur trouvé</p>

<?php } ?>   
</div>
</body>
<script src="animation.js"></script>
</html>











