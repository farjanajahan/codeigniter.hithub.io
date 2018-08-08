<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.navbar {
	margin-bottom:0px;	
	
}

#myCarousel{margin-top:100px;
}

</style>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">	
	<div>
    	<a href="#" class="navbar-brand">Farjana Beauty Parlour</a>
    </div>
	<div class="pull-right">
    	<ul class="nav navbar-nav">
        	<li class="active"><a href="">Home</a></li>
            <li><a href="<?php echo base_url(); ?>front#about">About</a></li>
            <li><a href="<?php echo base_url(); ?>front#service">Our Service</a></li>
            <li><a href="<?php echo base_url(); ?>front#skill">Special Offer</a></li>             
            <li><a href="<?php echo base_url(); ?>front#portfolio">Gallery</a></li>
            <li><a href="<?php echo base_url(); ?>front#contact">Contact</a></li>
    	</ul>
    </div>	
</div>
</nav> 


<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
  <img src="<?php echo base_url(); ?>img/33.jpg" style="width:100%">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
  <img src="<?php echo base_url(); ?>img/index.jpg" style="width:100%">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
  <img src="<?php echo base_url(); ?>img/images1.jpg" style="width:100%">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
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
