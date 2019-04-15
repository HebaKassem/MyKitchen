<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    echo "<script type='text/javascript'>alert('You must login first');</script>";
    header('location: login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/Homestyle.css">
</head>

<body>

    <header class="sticky-top">
        <div class="layer">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="Home.php">
                        <h1>myKitchen</h1>
                    </a>
                    <div id="navbarSupportedContent" class="collapse navbar-collapse sidenav">
                        <a href="javascript:void(0)" class="closebtn d-lg-none" id="cls-btn">&times;</a>
                        <ul class="navbar-nav ml-lg-auto">
                            <li>
                                <a href="Home.php" class="active">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="login.php?logout='1'">Logout</a>
                            </li>
                            
                        </ul>

                    </div>

                    <button type="button" class="toggler" id="toggle-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                </nav>
            </div>
        </div>
    </header>

    <section class="index-recipies">
        <div class="container">
            <?php  if (isset($_SESSION['username'])) : ?>
            <p data-aos="fade-up" data-aos-duration="1000">Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
            <h2 data-aos="fade-up" data-aos-duration="1000">Check Out Recipes</h2><br>
            <br></br>
            </h6>
            <ul class="row">
                <li class="col-sm-6 col-md-4">
                    <figure data-aos="fade-up" data-aos-duration="800">
                        <a href="mainDishes.php" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/one.jpg" alt="one" class="img-responsive">
                            <div class="overlay">
                                <h5>Main Dishes</h5>
                            </div>
                        </a>
                    </figure>
                </li>
                <li class="col-sm-6 col-md-4">
                    <figure data-aos="fade-up" data-aos-duration="1000">
                        <a href="desserts.php" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/three.jpg" alt="three" class="img-responsive">
                            <div class="overlay">
                                <h5>Desserts</h5>
                            </div>
                        </a>
                    </figure>
                </li>
                <li class="col-sm-6 col-md-4">
                    <figure data-aos="fade-up" data-aos-duration="1200">
                        <a href="drink.php" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/drinks.jpg" alt="drinks" class="img-responsive">
                            <div class="overlay">
                                <h5>Drinks</h5>
                            </div>
                        </a>
                    </figure>
                </li>
                <li class="col-sm-6 col-md-4">
                    <figure data-aos="fade-up" data-aos-duration="1200">
                        <a href="soups.php" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/soup2.jpg" alt="soup2" class="img-responsive">
                            <div class="overlay">
                                <h5>Soup</h5>
                            </div>
                        </a>
                    </figure>
                </li>
                <li class="col-sm-6 col-md-4">
                    <figure data-aos="fade-up" data-aos-duration="1200">
                        <a href="salad.php" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/salad.jpg" alt="salad" class="img-responsive">
                            <div class="overlay">
                                <h5>Salad</h5>
                            </div>
                        </a>
                    </figure>
                </li>
                <li class="col-sm-6 col-md-4">
                    <figure data-aos="fade-up" data-aos-duration="1200">
                        <a href="breakfast.php" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/seven.jpg" alt="seven" class="img-responsive">
                            <div class="overlay">
                                <h5>Breakfast</h5>
                            </div>
                        </a>
                    </figure>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="home.html">
                    <h2>myKitchen</h2>
                </a>


                <div class="footer-nav ml-md-auto">
                    <ul class="navbar-nav ml-sm-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="home.php?">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.html">About</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link text-white"  href="login.php?logout='1'">Logout</a>

                        </li>
                        
                    </ul>

                </div>
            </nav>
        </div>
    </footer>

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.loop').owlCarousel({
                center: true,
                items: 2,
                loop: true,
                margin: 0,
                // autoplay: true,
                // slideTransition: 'linear',
                // autoplayTimeout: 2000,
                // autoplaySpeed: 1000,
                // autoplayHoverPause: true,
                responsive: {
                    426: {
                        items: 2
                    },
                    640: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                }
            });

        });
    </script>
    
</body>

</html>