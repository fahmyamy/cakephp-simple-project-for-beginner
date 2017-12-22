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

$cakeDescription = 'Cari.my ';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $title; ?>
    </title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $this->Html->meta('icon') ?>
	
	<?= $this->Html->css('bootstrap-social.css') ?>
	<?= $this->Html->css('card.css') ?>
	<?= $this->Html->css('home.css') ?>
	<?= $this->Html->css('index.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
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
      <?= $this->Html->link(__('Cari.my'), ['controller' => 'Categories', 'action' => 'dashboard'], ['class' => 'navbar-brand']) ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<?php
		if ($this->request->session()->read('Auth.User')){
			if($this->request->session()->read('Auth.User.privilege') == 'admin') {
				$id = $this->request->session()->read('Auth.User.id');?>
				<li><?= $this->Html->link(__('COMPANY'), ['controller' => 'companies', 'action' => 'add', 'user_id' => $id]) ?></li>
				<li><?= $this->Html->link(__('PROFILE'), ['controller' => 'users', 'action' => 'view', $id]) ?></li>
				<?php echo $this->Html->link(__('LOGOUT'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-warning btn-md', 'style' => 'margin-top:8px;margin-left:8px;font-size:12px;width:100px;']);
			}else if($this->request->session()->read('Auth.User.privilege') == 'finder') {
				$id = $this->request->session()->read('Auth.User.id');?>
				<li><?= $this->Html->link(__('CATEGORY'), ['controller' => 'categories', 'action' => 'listcategory']) ?></li>
				<li><?= $this->Html->link(__('PROFILE'), ['controller' => 'users', 'action' => 'view', $id]) ?></li>
				<?php echo $this->Html->link(__('LOGOUT'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-warning btn-md', 'style' => 'margin-top:8px;margin-left:8px;font-size:12px;width:100px;']);
			}
		}else {?>
			<li><?= $this->Html->link(__('CATEGORY'), ['controller' => 'categories', 'action' => 'listcategory']) ?></li>
			<?php echo $this->Html->link(__('JOIN'), ['controller' => 'users', 'action' => 'login'], ['class' => 'btn btn-warning btn-md', 'style' => 'margin-top:8px;margin-left:8px;font-size:12px;width:100px;']);
		}?>
	  </ul>
	</div>
  </div>
</nav>
	<?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
		
<footer class="container-fluid text-center bg-grey">
	<a href="#myPage" title="To Top">
	<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
  <p>Cari.my since 2017</p>
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

