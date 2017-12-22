<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
 */
?>
<br/>
<div class="jumbotron text-center">
  <h1 style="font-family:Californian FB;font-size:70px;">Cari.my</h1> 
  <p>We Provide You Business Platform and Serve The Services</p>
  <center>
  <?= $this->Form->create(null, ['url' => ['controller' => 'producers', 'action' => 'search']])?>
    <div class="input-group col-xs-5">
	  <?= $this->Form->control('search', array('label' => '', 'type' => 'search', 'size' => '50', 'class' => 'form-control', 'placeholder' => 'Search Services', 'id' => 'search')); ?>
      <div class="input-group-btn">
		<?= $this->Form->submit('Search', array('class' => 'btn btn-danger')); ?>
			<?= $this->Form->end();?>
      </div>
    </div>
  </center>
</div>

<div id="services" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Improve your Company</h1>
  <h4>Easy Peasy Lemon Squeezy</h4><br>
  <br>
  <div class="row slideanim">
  <?php foreach ($category as $category): ?>
    <div class="col-sm-4">
      <a href="services/listservice/<?php echo $category->id . '/' . $category->name; ?>" class="darken"><img src="<?php echo $this->request->webroot . $category->picture; ?>" class="img-rounded" width="260" height="150"></a>
      <h4><?= $this->Html->link(__($category->name), ['controller' => 'services', 'action' => 'listservice', $category->id, $category->name], ['style' => 'color:black;text-decoration:none;']) ?></h4>
	  <br /><br />
	</div>
   <?php endforeach; ?>
   </div>
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
        <p>Spread your business idea </p>
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