<?php 
require_once("../lib/select_produit.php");
require_once("../lib/random_article.php");
require_once("../lib/display.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="single_article.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41a8ece914.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav><a href="../index.php"><h1>GAMESHOP</h1></a><button class="connexion"><i class="fa-solid fa-user"></i></button></nav>

<?php foreach ($allproduits as $produit) {  ?>
        <?php if ($produit['id_produit'] == $_GET['id_produit']) { ?>
        
            
            <div class="card">
            
            <img class="imagejeu" src="../assets/<?php echo $produit['imageheight'];?>" alt="">
            
            <div class="texte">
            <p class="titre"><?php echo $produit['titre'];?></p>
            <?php if ($produit['stock'] == 'oui' ){
             echo '<p class="stock"><i class="fa-brands fa-steam"></i>  Steam | En Stock : <i class=" fa-solid fa-check"></i>  </p>';  }else{

             echo '<p class="stock"><i class="fa-brands fa-steam"></i>  Steam | En Stock : <i class="fa-regular fa-circle-xmark"></i>   </p>' ;  
             } ?> 
            <video class="video"  muted loop autoplay  src="<?php echo $produit['videocard']?>;" type="video/webm"></video>
            <p class="intro"><?php echo $produit['introduction'];?></p>
           
            <p class="prix"> <?php echo $produit['price'];?>€  </p>
           
          
            <button class="achat"><i class="fa-solid fa-basket-shopping"></i></button>
            <button class="achat"> Acheter</button>
            
            
            </div>
            
        
           </div>
          
            
       <?php } ?>
       <?php } ?>
<?php
       while ($prod = $randomproduit->fetch(PDO::FETCH_ASSOC))   { ?>
      <?php if($prod['display'] ==  0){ ?>
        <?php if( $prod['id_produit'] != $_GET['id_produit'] ){ ?>
         <img class="imagejeu" src="../assets/<?php echo $prod['image'];?>" alt="">
<?php   }?>
<?php   }?>
<?php   }?>







</body>
</html>