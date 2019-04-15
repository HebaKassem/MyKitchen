<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    echo "<script type='text/javascript'>alert('You must login first');</script>";
    header('location: login.php');
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Breakfast</title>
    <style>.banner-home {height: auto;padding-top: 187px;}</style>
  </head>
  <body>

<!-- Header section Start-->
<header class="top">
 

<nav id="navbar">
   <!-- container Start-->
    <div class="container">
       <!--Row Start-->
       <div class="row">
        <div class="col-lg-4 col-xs-9">
            <h2>myKitchen<h2>
        </div>
         <div class="col-lg-8 col-xs-3">
           
         </div>
       </div>
       <!--Row Ended-->
    </div>
   <!-- container Ended-->
</nav>
</header>
<!-- Header section Ended-->

<section class="banner-home"></section>
<!-- Banner section End-->

<!-- blog-single Section Start -->
<div id="blog-single">
    <div class="container">
       <p class="ses" data-aos="fade-left" data-aos-duration="500"><strong><?php echo $_SESSION['username']; ?></strong> Welcome at World of</p><br>
       <h1 data-aos="fade-left" data-aos-duration="500">BREAKFAST</h1>
    </div>
    <hr/>



<?php
require_once "connection2.php";
echo"<title>Desserts</title>";
class items extends connection
{
  function view_breakfast()
  {
    parent::connect();
    $sql = "SELECT * FROM items ";//WHERE category=dessert
    $result=mysql_query($sql);
    $num_of_rows=mysql_num_rows($result);

    for($i=0; $i<$num_of_rows; $i++)
    {
      $row=mysql_fetch_array($result);
      $arr[$i][0]=$row["id"];
      $arr[$i][1]=$row["category"];
      $arr[$i][2]=$row["name"];
      $arr[$i][3]=$row["ingredients"];
      $arr[$i][4]=$row["preparation"];
      $arr[$i][5]="images/".$row["picture"];
      
    }
    

  for($i=0; $i<$num_of_rows; $i++)
  { 
     
//<?php echo $arr[$i][$j]; 
    if($arr[$i][1]=="breakfast" )
      {
       ?> 
  <div class="container">
        <div class="heading">
            <h2> <?php echo $arr[$i][2];?> </h2>
        </div>
          <div class="row" data-aos="fade-up" data-aos-duration="700">
             <div class="col-sm-12 col-lg-12 box">
              <img src="<?php echo $arr[$i][5]; ?>" alt="displaying error" width=557px height=480px class="blog-single .img-thumbnail image">
              <?php

              $string = $arr[$i][3];  
              $str_arr = preg_split ("/\n/", $string); 
              foreach($str_arr as $value){
              print $value;
              echo "<br>";
              }

              ?>
              
              <div class="qutation">
              <h4><?php

              $string = $arr[$i][4];  
              $str_arr = preg_split ("/\n/", $string); 
              foreach($str_arr as $value){
              print $value;
              echo "<br>";
              echo "<br>";
              }

              ?></h4>
              </div>
             
            </div>
             </div>
    </div>
   <?php
           echo"<br><br>";   
    }
            //echo"<hr>";

  }

    parent::disconnect();   
  }
}

$obj= new items;
echo $obj->view_breakfast();

?>

 
  </div>
<!-- Blog_single Section End -->


<footer class="page-footer font-small indigo">
  <div class="gradient">
   <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a class="nav-link text-white active" href="home.html">
                    <h1>myKitchen</h1>
                </a>


                <div class="footer-nav ml-md-auto">
                    <ul class="navbar-nav ml-sm-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="home.php"><h4>Home</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.html"><h4>About</h4></a>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </div>
  </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>