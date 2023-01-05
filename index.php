<?php 
require_once("lib/connexion.php");
require_once("lib/select_produit.php");
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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
<h1>GameShop</h1>
<a class href="#"><div class="banniere"><p class="stray">Stray</p><p class="strayprice">20€</p></div></a> 

    <form method="GET">
       <input type="search" name="r" placeholder="rechercher">
       <input type="submit">

    </form>




    <div class="allcard">

              

    
    
    <section>
        <?php 
        if($allusers->rowCount() >0){
            while($users = $allusers->fetch()){
                ?>
                     <div class="cardparent">
        <div class="card">
        <img class="reddead" src="assets/<?php echo $users['image'];?>" alt="">
        <a href="#">
            <video class="video" muted loop  src="<?php echo $users['video']?>;" type="video/webm"></video>
        </a>
    </div>
    <div class="information"><p class="titre"><?php echo $users['titre'];?></p><p class="price">24.99€</p></div>
    </div>
                
                
                 
                <?php } 

        }else{
          ?>
        <p>aucune utilisateur trouvé</p>

    
    <?php } ?>
        
    </section>
 
    

  

    
</div>





</body>
<script src="animation.js"></script>
</html>










<!-- https://s1.gaming-cdn.com/videos/products/5679/800x450/red-dead-redemption-2-pc-jeu-rockstar-preview.webm?v=1657034665 -->
