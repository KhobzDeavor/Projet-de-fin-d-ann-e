<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet final</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
            <img class="logo" src="img/Design sans titre (3).png" alt="Logo">
        </div>

        


        <h5 class="brand">SHINE x ARL</h5>
        <div class="onglets">
            <a href="index.php">Home</a>
            <a href="airshine.html">Air Shine's</a>
           
            
            <a href="commandes.html">Mes commandes</a>
            
            <img class="imageicon" src="img\Design sans titre (16).png" id="cart-icon">
        </div>
    </nav>

  <header4>
    <video class="videopub" muted loop id="myvideo">
      
      <source src="img\Copie de Jaune Orange Gris Net Professionnel Maquettes Technologie financière (Fintech) Technologie Présentation.mp4" type="video/mp4">


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
          bottom: ;w
        }

          body{
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    background: linear-gradient(#D59E19, #000000);
    background-repeat: no-repeat;
  
}
nav{
    display:flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
    border-bottom: 3px solid #D59E19;
}



      </style>

    <script type="text/javascript">

      let video = document.getElementById("myvideo");

      video.addEventListener("mouseover",()=>{
      video.play();

    })

       video.addEventListener("mouseout",()=>{
      video.pause();

    })
      


    </script>
      

    
     

       




        
  </header4>

<div class="panier">
    <div class="logo">
            <img class="logo" src="img\Design sans titre (16).png" alt="Logo">
    </div>

    
    <h10 class="panier-title">Votre panier</h10>
   <div class="panier-contenu">
    <div class="panier-box">
      <img src="img\rolexshine.png" alt="" class="panier-img">
      <div class="detail-box">
        
        <div class="panier-titre">
          <h12>Yellowshine</h12>
          
        </div>
        
        <div class="panier-prix">100euros</div>
        <input type="number" value="1" class="panier-quantité">
        <img class="imageicone" src="img\croixrouge.png" id="cart-remove">
        
      </div>
      
    </div>
   </div>
    <div class="total">
     <div class="total-title">Total</div>
     <div class="total-price">$0</div>
    </div>

   <button type="button" class="btn-buy">Acheter</button>
    
     <img class="imageicone "src="img\logoicone.ico.ico" alt="image" id="close-cart">
   

    </div>
</div>

 
  <style>

   .image-card {
      margin-right: 20px;
      display: inline-block;
      text-align: center;
      width: 324px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin: 10px;
      color: #D59E19;
      position: relative;
          left:400px ;
          right: ;
          top: 100 ;
          bottom: ;w
     
      transition: transform 0.3s ease;
      transition: filter 0.3s ease;
      background: linear-gradient(#D59E19, #000000)

    }

    .image-card img {
      width: 300px;
      height: 300px;
      object-fit: cover;
      border-radius: 4px;
      color: #D59E19;
      
    }

    .image-card:hover  {
      transform: scale(1.1);
      filter: blur(3px);
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
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }




  </style>
</head>
<body>

 <h9>
  <div class="image-card">
    <img src="img\Design sans titre (13).png" alt="Image 1">
    <div class="name">Aston'Original"</div>
    <div class="price">$49.99</div>
    <div class="overlay">
      <button>Commander</button>
    </div>
  </div>



  


  
  <div class="image-card">
    <img src="img\rolexshine.png" alt="Image 4">
    <div class="name">BlackVenom</div>
    <div class="price">$59.99</div>
  </div>
</h9>

<div class="image-card">
    <img src="img\Design sans titre (14).png" alt="Image 2">
    <div class="name">Lambo'Original</div>
    <div class="price">$29.99</div>

  </div>



</div>






<style>
      

        .imageicon{
        width: 40px;
        height: auto;
        cursor: pointer;
        position: relative;
        top: 17px;
      }
        
    .panier{
        position: fixed;
        top: 0;
        right: -100%;
        width: 360px;
        min-height: 100vh;
        padding: 20px;
     
        box-shadow: -2px 0 4px hsl(0 4% 15% * 10%);

        background: linear-gradient(#C89116, #0E0E0E);
     
        transition: 0.5s all;



      }

      .panier.active{
        right: 0;
        transition: 0.5s all;


      }

      .panier-titre{
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


      </style>

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

if (document.readyState == "loading") {
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
  for (var i = 0; i < quantityInputs.length; i++){
    var input = quantityInputs[i]; // Correction de la faute de frappe
    input.addEventListener("change", quantityChanged);
  }

  var addCart = document.getElementsByClassName("addcart")
  for (var i = 0; i < addCart.length; i++) {
    var button = addCart[i];
    button.addEventListener("click" , addCartClicked);

  }
}

function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  updateTotal(); 
}

function quantityChanged(event){
  var  input = event.target;
  if (isNaN(input.value) || input.value <= 0){ // Correction de "isNan" à "isNaN"
    input.value = 1;
  }
  updateTotal();
}

 function addCartClicked(event) {
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName("panier-titre")[0].innerText; // Ajout des parenthèses autour de innerText

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



    <?php
    // Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "site_airshine";

$conn = mysqli_connect($host, $username, $password, $dbname);


if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}


$sql = "SELECT * FROM produits_arl WHERE id_produit = 10,11,12";
$result = mysqli_query($conn, $sql);



?>
 
</body>
</html>