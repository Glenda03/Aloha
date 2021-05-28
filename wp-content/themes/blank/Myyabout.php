<?php
	/* Template Name: ABOUT US */

	get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron" style="background-image: url('http://localhost/Wordpress1/wp-content/uploads/2021/05/pink.jpg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover; margin-top: 75px;">
    <h1 style="text-align: center;">ABOUT US</h1>      
    <p style = "font-family: Engrave MT;" >Laced In Luxury created a new way to spoil who love fashion, because we believe style is a way of life, deeply personal, and should always be fun. Today, millions of women get their personalized fashion fix from us, with access to top trend style inspiration, and world-class service.
    </p>
  </div>   
</div>



<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://localhost/Wordpress1/wp-content/uploads/2021/05/btshoes0001-1.jpg" style = "width: 100%; height: 100%;">
      </div>

      <div class="item">
        <img src="http://localhost/Wordpress1/wp-content/uploads/2021/05/one-strap-ankle-pointed-heels.jpg" style = "width: 100%; height: 70%;">
      </div>
    
      <div class="item">
        <img src="http://localhost/Wordpress1/wp-content/uploads/2021/05/Capture-6.jpg" style = "width: 100%; height: 70%;">
      </div>
    
      <div class="item">
        <img src="http://localhost/Wordpress1/wp-content/uploads/2021/05/weddingsandals.jpg" style = "width: 100%; height: 70%;">
      </div>
    
      <div class="item">
        <img src="http://localhost/Wordpress1/wp-content/uploads/2021/05/Capture3-3.jpg" style = "width: 100%; height: 70%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</body>
</html>

<?php
 get_footer();
?>