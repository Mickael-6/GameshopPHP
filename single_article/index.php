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
    <title>Document</title>
</head>
<body>
    <nav></nav>

<?php foreach ($allproduits as $produit) {  ?>
        <?php if ($produit['id_produit'] == $_GET['id_produit']) { ?>
        
            
            <div class="card">
            
            <img class="imagejeu" src="../assets/<?php echo $produit['imageheight'];?>" alt="">
            <p class="titre"><?php echo $produit['titre'];?></p>
            
        
           </div>
          
            
       <?php } ?>
<?php } ?>

</body>
</html>