<?php 
require_once("lib/recherche.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41a8ece914.js" crossorigin="anonymous"></script>
  
</head>
<body>
<h1>GAMESHOP</h1>
<div class="banniere"><h2>GAMESHOP</h2> <p class="soustitre">Jeux PC, PS5, PS4, XBOX, Switch.</p></div>

    


<form method="GET" class="form"> 
<div class="inputGroup">
<button type="input"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    <input type="search" name="r" type="text" required="" autocomplete="off" >
    
    
    <label for="name">Recherche Jeux</label>
    
    
</div>

</form>


<div class="allcard">


    <?php 
        if($allproduits->rowCount() >0){
            while($produit = $allproduits->fetch()){
                ?>
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

        }else{
          ?>
        <p>aucune utilisateur trouvé</p>

    
    <?php } ?>
        
    
    

  

    
</div>





</body>
<script src="animation.js"></script>
</html>










<!-- https://s1.gaming-cdn.com/videos/products/5679/800x450/red-dead-redemption-2-pc-jeu-rockstar-preview.webm?v=1657034665 -->
