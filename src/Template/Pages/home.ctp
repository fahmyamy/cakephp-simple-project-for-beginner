<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'Cari.my - Homepage';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $this->Html->css('bootstrap-social.css') ?>
	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('card.css') ?>
	<?= $this->Html->css('home.css') ?>
	<?= $this->Html->css('index.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <?= $this->Html->link(__('Cari.my'), ['controller' => 'pages', 'action' => 'home'], ['class' => 'navbar-brand']) ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><?= $this->Html->link(__('CATEGORY'), ['controller' => 'categories', 'action' => 'listcategory']) ?></li>
		<li><a href="#contact">CONTACT</a></li>
		<?= $this->Html->link(__('JOIN'), ['controller' => 'users', 'action' => 'login'], ['class' => 'btn btn-warning btn-md', 'style' => 'margin-top: 8px;margin-left: 8px']) ?>
	  </ul>
	</div>
  </div>
</nav>
<div class="jumbotron text-center">
  <h1 style="font-family:Californian FB;font-size:70px;">Cari.my</h1> 
  <p>We Provide You Business Platform and Serve The Services</p>
  <center>
  <form>
    <div class="input-group col-xs-5">
      <input type="search" class="form-control" size="50" placeholder="Search Services" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Search</button>
      </div>
    </div>
  </form>
  </center>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">New Features</h1>
  <h4></h4><br>
  <br>
  
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-warning">
<h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">What We Provide</h1>
  <h4>Anything You Need</h4><br>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="" width="400" height="300">
        <p><strong>Editing</strong></p>
        <p>Computerize your business logo</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="" width="400" height="300">
        <p><strong>Programming</strong></p>
        <p>Manage your business automatically</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="" width="400" height="300">
        <p><strong>Marketing</strong></p>
        <p>Spread your business name </p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center bg-grey">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <div class="row">
	  <div class="col-sm-2">
		<h5 style="color:grey;font-weight:bold;text-align:left;">CATEGORIES</h5>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Graphics & Design</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Digital Marketing</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Writing & Translation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Video & Animation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Music & Audio</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Programming & Tech</h5></a>
	  </div>
	  <div class="col-sm-2">
	  <h5 style="color:grey;font-weight:bold;text-align:left;">ABOUT</h5>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Graphics & Design</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Digital Marketing</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Writing & Translation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Video & Animation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Music & Audio</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Programming & Tech</h5></a>
	  </div>
	  <div class="col-sm-2">
	  <h5 style="color:grey;font-weight:bold;text-align:left;">COMMUNITY</h5>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Graphics & Design</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Digital Marketing</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Writing & Translation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Video & Animation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Music & Audio</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Programming & Tech</h5></a>
	  </div>
	  <div class="col-sm-2">
	  <h5 style="color:grey;font-weight:bold;text-align:left;">SUPPORT</h5>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Graphics & Design</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Digital Marketing</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Writing & Translation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Video & Animation</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Music & Audio</h5></a>
			<a href="#" style="color:white"><h5 style="color:white;padding-bottom:10px;text-align:left;">Programming & Tech</h5></a>
	  </div>
	  <div class="col-sm-2">
	  <h5 style="color:grey;font-weight:bold;text-align:left;">FOLLOW US</h5>
			<a href="#" style="color:white" target="_blank">
				<h5 style="color:white;padding-bottom:5px;text-align:left;">
				<i class="fa fa-google-plus-square" style="font-size:20px;color:white"></i>&emsp;Google</h5>
			</a>
			<a href="#" style="color:white" target="_blank">
				<h5 style="color:white;padding-bottom:5px;text-align:left;">
				<i class="fa fa-twitter-square" style="font-size:20px;color:white"></i>&emsp;Twitter</h5>
			</a>
			<a href="#" style="color:white" target="_blank">
				<h5 style="color:white;padding-bottom:5px;text-align:left;">
				<i class="fa fa-facebook-square" style="font-size:20px;color:white"></i>&emsp;Facebook</h5>
			</a>
			<a href="#" style="color:white" target="_blank">
				<h5 style="color:white;padding-bottom:5px;text-align:left;">
				<i class="fa fa-instagram" style="font-size:20px;color:white"></i>&emsp;Instagram</h5>
			</a>
	  </div>
  </div>
  <br>
  <p>Bootstrap Theme Made By Banzai16</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
