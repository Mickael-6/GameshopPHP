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
    <title>Document</title>
</head>
<body>
<?php foreach ($allproduits as $produit) {  ?>
        <?php if ($produit['id_produit'] == $_GET['id_produit']) { ?>
            <img class="imagejeu" src="../assets/<?php echo $produit['image'];?>" alt="">
       <?php } ?>
<?php } ?>
</body>
</html>