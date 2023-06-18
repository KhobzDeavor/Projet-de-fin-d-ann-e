<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet final</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="C:\wamp64\www\img\logoicone.ico.png" href="favicon.ico">
</head>
<body>
    <nav>
        <div class="logo">
            <img class="logo" src="img/Design sans titre (3).png" alt="Logo">
        </div>

        


        <h5 class="brand">SHINE</h5>
        <div class="onglets">
            <a href="index.html">Home</a>

            <a href="Airshinexarl.php">Air Shine's X ARL</a>
            
            <a href="test.php">Mes commandes</a>
           
            
            <img class="imageicon" src="img\Design sans titre (16).png" id="cart-icon">
        </div>
    </nav>

  <header4>
    <video class="videopub" muted loop id="myvideo">
      <source src="img\4 eme video.mp4" type="video/mp4">


    </video>

      <style>
        .videopub{
          height: 500px;
          display:flex;
          justify-content: center;
          align-items: center;
          margin-left: px;
          position: relative;
          left:210px ;
          right: ;
          top:  ;
          bottom: ;

        


        }

        .imageicon{
        width: 40px;
        height: auto;
        cursor: pointer;
        position: relative;
        top: 17px;
      }
        


      </style>






<?php
session_start();
require('config.php');



// Fonction pour ajouter un produit au panier
function ajouterAuPanier($produit, $quantite = 1) {
    // Vérifier si le produit est déjà dans le panier
    if (isset($_SESSION['panier'][$produit])) {
        // Le produit existe déjà, augmenter la quantité
        $_SESSION['panier'][$produit] += $quantite;
    } else {
        // Le produit n'existe pas, l'ajouter avec la quantité spécifiée
        $_SESSION['panier'][$produit] = $quantite;
    }
}

// Fonction pour supprimer un produit du panier
function supprimerDuPanier($produit) {
    if (isset($_SESSION['panier'][$produit])) {
        unset($_SESSION['panier'][$produit]);
    }
}

// Vérifier si un produit a été ajouté au panier
if (isset($_POST['ajouter_au_panier'])) {
    $produit = $_POST['produit'];
    $quantite = $_POST['quantite'];
    ajouterAuPanier($produit, $quantite);
}

// Vérifier si un produit a été supprimé du panier
if (isset($_GET['supprimer_produit'])) {
    $produit = $_GET['supprimer_produit'];
    supprimerDuPanier($produit);
}

// Afficher le panier




if (!empty($_SESSION['panier'])) {
    
// Afficher la div panier une seule fois

echo "<div class='panier'>";
// Boucle pour ajouter les produits au panier
foreach ($_SESSION['panier'] as $produit => $quantite) {
    echo "
    <div class='panier-contenu'>
        <p>Produit : " . htmlspecialchars($produit) . "</p>
        <p>Quantité : $quantite</p>
        <a href='?supprimer_produit=" . urlencode($produit) . "'>Supprimer</a>
    </div>";
}

// Fermer la div panier
echo "</div>";


    echo "</table>";
} else {
    echo "<div class='panier'><p>Le panier est vide.</p></div>";
}

// Récupérer les produits depuis la base de données
$requete = "SELECT * FROM produits";
$resultat = mysqli_query($conn, $requete);

// Afficher la liste des produits avec la possibilité d'ajouter au panier
echo "'";
while ($row = mysqli_fetch_assoc($resultat)) {
    $produit = $row['nom'];
    $prix = $row['prix'];
    $imageData = $row['image'];

    echo "<div class='image-card'>
            <div class='name'> <p>" . htmlspecialchars($produit) . "</p></div>
            <img src='data:image/png;base64," . base64_encode($imageData) . "' alt='Image'><br>
            <div class='price'><p>Prix : $prix</p></div>
            <form method='post' action=''>
                <input type='hidden' name='produit' value='" . htmlspecialchars($produit) . "'>
                <label for='quantite'>Quantité :</label>
                <input type='number' name='quantite' value='1' min='1
'>
                <button type='submit' name='ajouter_au_panier'>Ajouter au panier</button>
            </form>
        </div>
       
        ";
}
echo "</div>";

?>













<script type="text/javascript">
  let cartIcon = document.querySelector("#cart-icon");
let cart = document.querySelector(".panier");
let closeCart = document.querySelector("#close-cart");

cartIcon.onclick = () => {
  cart.classList.add("active");
};

closeCart.onclick = () => {
  cart.classList.remove("active");
};

if (document.readyState === "loading") {
  document.addEventListener('DOMContentLoaded', ready);
} else {
  ready();
}

function ready() {
  var removeCartButtons = document.querySelectorAll(".cart-remove");
  console.log(removeCartButtons);
  for (var i = 0; i < removeCartButtons.length; i++) {
    var button = removeCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }
  var quantityInputs = document.getElementsByClassName("panier-quantité");
  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
  }

  var addCart = document.getElementsByClassName("addcart");
  for (var i = 0; i < addCart.length; i++) {
    var button = addCart[i];
    button.addEventListener("click", addCartClicked);
  }
}

function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  updateTotal(); 
}

function quantityChanged(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateTotal();
}

function addCartClicked(event) {
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName("panier-titre")[0].innerText;

  console.log(title);
}

function updateTotal() {
  var cartBoxes = document.getElementsByClassName("panier-box");
  var total = 0;
  for (var i = 0; i < cartBoxes.length; i++) {
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName("panier-prix")[0];
    var quantitéElement = cartBox.getElementsByClassName("panier-quantité")[0];
    var price = parseFloat(priceElement.innerText.replace("$", ""));
    var quantité = parseInt(quantitéElement.value);

    total += price * quantité;
  }

  document.getElementsByClassName("total-price")[0].innerText = '$' + total;
}



    

    


  </script>

  <style type="text/css">


    .panier{
      position: fixed;
      top: 0;
      right: -100%;
      width: 360px;
      min-height: 100vh;
      padding: 20px;
      background: var(--bg-color);
      box-shadow: -2px 0 4px hsl(0 4% 15% * 10%);

      background: linear-gradient(#FF80F2, #f2f2f2);
     
      transition: 0.5s all;



      }

      .panier.active{
        right: 0;
        transition: 0.5s all;


      }

      .panier .titre{
        text-align: center;
        font-size: 1.5rem;
        font-weight: 600;
        position: relative;
        left: 0px;
        bottom: 0px;
        right: 80px;
      }

      .panier-box{
        display: grid;
        grid-template-columns: 32% 50% 18%;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;


      }

      .panier-img{
        width: 100px;
        height: 100px;
        object-fit: contain;
        padding: 10px;

      }

      .detail-box{
        display: grid;
        row-gap: 0.5rem;



      }

      .cart-product-title{
        font-size: 1.5rem;
        text-transform: uppercase;

      }

      .panier-prix{
        font-weight: 500;

      }

      .panier-quantité{
        border: 1px solid black;
        outline-color: green;
        width: 2.4rem;
        text-align: center;
        font-size: 1rem;
        border-radius: 4px;

      }

      .total{
        display: flex;
        justify-content: flex-end;
        margin-top: 1.5rem;
        border-top: 1px solid;

      }

      .imageicone{
        width: 30px;
        height: auto;
        cursor: pointer;
      }

      .total-title{
        font-size: 1rem;
        font-weight: 600;

      }

      .total-price{
        margin-left: 0.5rem;
      }

      .btn-buy{
        display: flex;
        margin: 1.5rem auto 0 auto;
        padding: 12px 20px;
        border: none;
        background-color: grey ;
        color: purple;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
      }

      .btn-buy:hover{
        background: white;
        transition: 0.5s all;
      }



      .cart-remove{
        width: 30px;
        height: auto;
        cursor: pointer;
      }

      #close-cart{
        width: 30px;
        height: auto;
        cursor: pointer;
        position: absolute;
        top: 1rem;
        right: 0.8rem;
        font-size:2rem;


        


      }

      .imageicon{
        width: 40px;
        height: auto;
        cursor: pointer;
        position: relative;
        top: 17px;
      }

</style>


  <style>
    
     .image-card {
      margin-right: 20px;
      display: inline-block;
      text-align: center;
      align-content: center;
      width: 324px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin: 10px;
      color: #FFFFFF;
      position: relative;
          left:400px ;
          right: ;
          top: 100 ;
          bottom: ;
     
      transition: transform 0.3s ease;
      transition: filter 0.3s ease;
      background: linear-gradient(#FF80F2, #000000)

    }

      .videopub2{

         height: 100px;
          display:flex;
          justify-content: center;
          align-items: center;
          margin-left: px;
          position: relative;
          left:20px ;
          right: ;
          top:  ;
          bottom: ;
        
      }

    .image-card img {
      width: 300px;
      height: 300px;
      object-fit: cover;
      border-radius: 4px;
      color: #D622C9;
      
    }

    .image-card:hover  {
      transform: scale(1.1);
      filter: blur(0.5px);
    }

    .image-card .overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .image-card:hover .overlay {
      opacity: 1;
    }

    .image-card .name {
      margin-top: 10px;
      font-weight: bold;
    }

    .image-card .price {
      margin-top: 5px;
      color: green;
    }

    

    .image-card button {
      padding: 10px 20px;
      background-color: #333;
      color: #CB6CE6;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .addcart{
        width: 
        50px;
        height: auto;
        cursor: pointer;
        position: absolute;
        bottom: 0;
        right: 0;
        padding: 10px;
       
        
      }
   

     
     

</style>

<footer>

        <h1>Nos services</h1>
        <div class="services">
            
            <div class="service">
                <h3>Livraison gratuite</h3>
                <p>Nos magasins sont présents dans la France entière, vous pouvez commander ou bien trouver la paire de vos rêves sur place dans nos magasins !</p>
            </div>

            <div class="service">
                <h3>Paiement en ligne</h3>
                <p>Visa, PaySafeCard, AmazonPay, Paypal, Klarna,... Nous acceptons tous types de paiements en ligne de façon sécurisée !</p>
            </div>

            <div class="service">
                <h3>Aimé ou remboursé</h3>
                <p>Bien qu'il n'y ait aucune chance que vous n'appréciez pas nos produits, nous acceptons tout de même de vous rembourser si vous n'êtes pas satisfait !</p>
            </div>

        </div>

        <p id="contact">Contact : 06 70 22 72 72 | &copy; 2023, Belaid, Rhazlaoui.</p>
    </footer>

