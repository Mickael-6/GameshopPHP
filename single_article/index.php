<?php 
require_once("../lib/select_produit.php");
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
    <nav></nav>

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
            
            <p class="intro"><?php echo $produit['introduction'];?></p>
            <p class="prix"><?php echo $produit['price'];?>€ </p>
            <button class="button"><i class="fa-solid fa-basket-shopping"></i></button>
            <button class="button"> Acheter</button>
            
            
            </div>
            
        
           </div>
          
            
       <?php } ?>
<?php } ?>

</body>
</html>