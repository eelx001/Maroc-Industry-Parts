<?php
include('classes/conn.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maroc Industry Parts</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
    <!-- Favicon -->
    <link href="img1/fav.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/9b8a7e18a0.js"></script>
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/st.css" rel="stylesheet">
</head>
<style>
    .row.gx-0.bg-secondary.d-none.d-lg-flex {
    border-radius: 0px 0px 0px 36px !important;
}
@import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');

body{
 background:#253A3D  ;
}
h2{
	text-align: center;
	margin-bottom: 5rem;
	font-size: 4rem;
}

.all-products{
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}

.product{
    border:0px solid;
    box-shadow:8px 20px 90px #666666;
	overflow: hidden;
	background: #ffffff;
	color: #21201e;
	text-align: center;
	width: 240px;
	height: 400px;
	padding: 2rem;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	border-radius: 1.2rem;
	margin: 2rem;
}
.product .product-title, .product .product-price{
	font-size: 18px;
}

.product:hover img{
	scale:  1.1;
}

.product:hover {
	box-shadow: 2px 10px 50px #3aa8a3;
}

.product img {
	width:100%;
	height: 50%;
	margin: 1rem;
	transition: all 0.3s;
    border-radius:20px;
}

.product a:link, .product a:visited{
	color: white;
	display: inline-block;
	text-decoration: none;
	background-color: #348785;
	padding: 1.2rem 3rem;
	border-radius: 1rem;
	margin-top: 1rem;
	font-size: 14px;
	transition: all 0.2s;
}

.product a:hover{
	transform: scale(1.1);
}
svg {
  position: absolute;
  top: -4000px;
  left: -4000px; }

#gooey-button {
  padding: 7px;
  font-size: 20px;
  border: none;
  color: #0c1016;
  filter: url("#gooey");
  position: relative;
  background-color: #3AA8A3; }
  #gooey-button:focus {
    outline: none; }
  #gooey-button .bubbles {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0; }
    #gooey-button .bubbles .bubble {
      background-color: #3AA8A3;
      border-radius: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      z-index: -1; }
      #gooey-button .bubbles .bubble:nth-child(1) {
        left: 88px;
        width: 25px;
        height: 25px;
        animation: move-1 3.02s infinite;
        animation-delay: 0.2s; }
      #gooey-button .bubbles .bubble:nth-child(2) {
        left: 36px;
        width: 25px;
        height: 25px;
        animation: move-2 3.04s infinite;
        animation-delay: 0.4s; }
      #gooey-button .bubbles .bubble:nth-child(3) {
        left: 37px;
        width: 25px;
        height: 25px;
        animation: move-3 3.06s infinite;
        animation-delay: 0.6s; }
      #gooey-button .bubbles .bubble:nth-child(4) {
        left: 68px;
        width: 25px;
        height: 25px;
        animation: move-4 3.08s infinite;
        animation-delay: 0.8s; }
      #gooey-button .bubbles .bubble:nth-child(5) {
        left: 27px;
        width: 25px;
        height: 25px;
        animation: move-5 3.1s infinite;
        animation-delay: 1s; }
      #gooey-button .bubbles .bubble:nth-child(6) {
        left: 55px;
        width: 25px;
        height: 25px;
        animation: move-6 3.12s infinite;
        animation-delay: 1.2s; }
      #gooey-button .bubbles .bubble:nth-child(7) {
        left: 25px;
        width: 25px;
        height: 25px;
        animation: move-7 3.14s infinite;
        animation-delay: 1.4s; }
      #gooey-button .bubbles .bubble:nth-child(8) {
        left: 52px;
        width: 25px;
        height: 25px;
        animation: move-8 3.16s infinite;
        animation-delay: 1.6s; }
      #gooey-button .bubbles .bubble:nth-child(9) {
        left: 54px;
        width: 25px;
        height: 25px;
        animation: move-9 3.18s infinite;
        animation-delay: 1.8s; }
      #gooey-button .bubbles .bubble:nth-child(10) {
        left: 20px;
        width: 25px;
        height: 25px;
        animation: move-10 3.2s infinite;
        animation-delay: 2s; }

@keyframes move-1 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -124px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-2 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -92px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-3 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -77px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-4 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -113px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-5 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -118px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-6 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -107px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-7 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -97px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-8 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -91px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-9 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -129px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }

@keyframes move-10 {
  0% {
    transform: translate(0, 0); }
  99% {
    transform: translate(0, -109px); }
  100% {
    transform: translate(0, 0);
    opacity: 0; } }


    form.form-inline.justify-content-center {
    margin-top: -75px;
}
@media only screen and (max-width: 600px) {
    .form-control {
        width:50%;
        margin:10px;
    }
    hr{
        display:none;
    }

}




</style>

<body>
     <!-- Header Start -->
     <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 display-4 text-primary text-uppercase"><img src="img1/oko.png" width="275px"></h1>
                   
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">maroc.industry.parts@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+212 661 096 691</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase"><img src="./img1/oko.png" width="175px"></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Accueil</a>
                            <a href="produits.php" id="" class="nav-item nav-link">Produits</a> 
                            <a href="index.php" id="aboutus" class="nav-item nav-link">à propos de nous</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>  
                        <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block"  style="background-color: #41DE5D;"><i class="fab fa-whatsapp me-2" id="wh"></i>Whatsapp</a>

                    </div>
                </nav>
            </div>
        </div>
    </div>

<div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center" >
                <h3 style="color:white;">Nos</h3><h1 class="display-2  text-white mb-md-3">Produits</h1>
            </div>
        </div>
    </div>    
    <form class="form-inline justify-content-center" action="" method="get">
    <input class="form-control mr-sm-2" name="search" href="#" id="myInput" placeholder="Rechercher.." aria-label="Search">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="gooey">
                <!-- in="sourceGraphic" -->
                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="highContrastGraphic" />
                <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
            </filter>
        </defs>
    </svg>

    <button id="gooey-button" type="submit" class="btn btn-success my-2 my-sm-0" disabled>
        Rechercher
        <span class="bubbles">
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
            <span class="bubble"></span>
        </span>
    </button>
  </form>
  
  <br>
  <br>

  <?php
// Get all products from the database
$sql = "SELECT id, produit, description, photo, date FROM products ORDER BY id DESC LIMIT 30;";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_NUM);
?>

<section class="products" id="myPro">
  <div class="all-products">
    <?php foreach ($products as $row) { ?>
      <div class="product">
        <img src="<?php echo $row[3]; ?>" />

        <div class="product-info">
          <h4 class="product-title"><?php echo $row[1]; ?></h4>
          <h6>Posté le: <?php echo $row[4]; ?></h6>
          <a class="product-btn" name="id" href="details.php?id=<?php echo $row[0]; ?>">DÉTAILS</a>
        </div>
      </div>
    <?php } ?>
  </div>
</section>





<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class=" text-light mb-4">Entrer en contact</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">AIN SBAA, Casablanca 20250</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">maroc.industry.parts@gmail.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+212 661 096 691</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="https://wa.me/212661096691" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class=" text-light mb-4">Liens rapides</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                            <a class="text-secondary mb-2" href="produits.php"><i class="bi bi-arrow-right text-primary me-2"></i>Produits</a>
                            <a class="text-secondary" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contactez-nous</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Maroc Industry Parts</h4>
                    <p class="text-light"> est une entreprise spécialisée dans la fabrication et la distribution de pièces industrielles au Maroc. Elle fournit une large gamme de produits pour différents secteurs industriels tels que l'automobile, l'aéronautique, la construction, l'énergie, etc.</p>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Maroc Industry Parts</a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>
<script>
  //Get the input field and product divs
  var input = document.getElementById("myInput");
  var productDivs = document.getElementsByClassName("product");

  // Add event listener to input field
  input.addEventListener("input", function() {
    // Convert input value to lowercase
    var inputValue = input.value.toLowerCase();

    // Loop through all product divs
    for (var i = 0; i < productDivs.length; i++) {
      // Get the product title in the current div
      var productTitle = productDivs[i].getElementsByClassName("product-title")[0];

      // Check if the product title contains the input value
      if (productTitle.innerText.toLowerCase().indexOf(inputValue) > -1) {
        productDivs[i].style.display = "";
      } else {
        productDivs[i].style.display = "none";
      }
    }
  });

</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
