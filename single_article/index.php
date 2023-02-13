<?php
session_start();
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
  <nav>
    <a class="retourindex" href="../index.php">
      <h1>GAMESHOP</h1>
    </a>
    <?php if (empty($_SESSION)) {  ?>
 <div class="allbutton">
 <button  class="connexion" onclick="window.location.href='../connexion/connexion.php'"><i class="fa-solid fa-user"></i> Connexion</button>
 <button class="inscription" onclick="window.location.href='../inscription/inscription.php'"><i class="fa-solid fa-scroll"></i> Inscription</button>
 </div>
 <?php } else { ?>
  <button  class="connexion" onclick="window.location.href='../lib/deconnexion.php'" ><i class="fa-solid fa-user"></i> deconnexion</button>
<?php } ?>
  </nav>

  <?php foreach ($allproduits as $produit) {  ?>
    <?php if ($produit['id_produit'] == $_GET['id_produit']) { ?>
      <div class="card">
        <img class="imagejeu" src="../assets/<?php echo $produit['imageheight']; ?>" alt="">
        <div class="texte">
          <p class="titre"><?php echo $produit['titre']; ?></p>
          <?php if ($produit['stock'] == 'oui') {
            echo '<p class="stock"><i class="fa-brands fa-steam"></i>  Steam | En Stock : <i class=" fa-solid fa-check"></i>  </p>';
          } else {
            echo '<p class="stock"><i class="fa-brands fa-steam"></i>  Steam | En Stock : <i class="fa-regular fa-circle-xmark"></i>   </p>';
          } ?>
          <video class="video" muted loop autoplay src="<?php echo $produit['videocard'] ?>;" type="video/webm"></video>
          <p class="intro"><?php echo $produit['introduction']; ?></p>
          <p class="prix"> <?php echo $produit['price']; ?>€ </p>
          <button class="achat"><i class="fa-solid fa-basket-shopping"></i></button>
          <button class="achat"> Acheter</button>
        </div>
      </div>
    <?php } ?>
  <?php } ?>

  <div class="contenueimage">
    <?php
    while ($prod = $randomproduit->fetch(PDO::FETCH_ASSOC)) { ?>
      <?php if ($prod['display'] ==  0) { ?>
        <?php if ($prod['id_produit'] != $_GET['id_produit']) { ?>
          <div class="contenueimagechild">
            <div class="promo">
              <p class="pourcent"><?php echo $produit['pourcent'] ?>%</p>
            </div>
            <a class="lienimage" href="../single_article/index.php?id_produit=<?php echo $prod['id_produit']; ?>">
              <img class="imagerandom" src="../assets/<?php echo $prod['image']; ?>" alt="">
            </a>
            <div class="info">
              <p class="titreimagerandom"><?php echo $prod['titre']; ?></p>
              <p class="prix2"> <?php echo $prod['price']; ?>€ </p>
            </div>
          </div>
        <?php } ?>
      <?php } ?>
    <?php } ?>
  </div>

</body>

</html>