
<?php
session_start();

?>


<!DOCTYPE html>
<html>
  <head>
    <title>foodlovers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">FoOdLOveRs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link" style="font-size: 20px;">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link" style="font-size: 20px;">About</a></li>
          <li class="nav-item"><a href="tour.html" class="nav-link" style="font-size: 20px;">Browse Restuarants</a></li>
          <li class="nav-item"><a href="hotel.html" class="nav-link" style="font-size: 20px;">Contact</a></li>
          <?php 
          if(isset($_SESSION['user']))
        {
      $s=$_SESSION['user'];
        ?>
          <li class="nav-item"><a href="profile.php" class="nav-link" style="font-size: 30px; color: red;"><?php echo $s;?></a></li>
          <?php
      }

      else{
      $s="SignUp & LogIn";?>

     <li class="nav-item"><a href="l.php" class="nav-link" style="font-size: 20px;"><?php echo $s;?></a></li>
      <?php } ?>


        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('https://images.wallpaperscraft.com/image/breakfast_porridge_waffles_fruit_115145_1600x1200.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Enjoy <br></strong> Amazing FOODS</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find foods according to your taste anytime at your Home</p>
            <div class="block-17 my-4">
              <form action="search.php" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                    <input type="text" class="form-control" name="search" placeholder="Ex: food, restaurant">
                  </div>
                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="select" id="" class="form-control" placeholder="Keyword search">
                      <option value="restuarant"> By Restaurant Name</option>
                      <option value="food">By Food Name</option>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">  
              </form>
            </div>
           
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Price Guarantee</h3>
                <p>Offer Food same as the available price at restaurant.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3"> Best Customer Service</h3>
                <p>Customer's satisfaction is our first priority.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best  Deliver  Agent</h3>
                <p>Deliver Food At Shortest Time.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Fresh Food</h3>
                <p>Confirm to deliver fresh foods.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    

    <?php include'footer.php';?>
    
  </body>
</html>