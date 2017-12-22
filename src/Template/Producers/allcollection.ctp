<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producer $producer
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;"><?php echo $serName; ?></h1>
  <h4>Make Your Dream Realize</h4><br>

  <!-- category details section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		<h4 style="font-weight:bold;margin-bottom:10px;"><?php echo $serName; ?></h4>
    </div>
    <div class="col-sm-10">
		<div>
			<?php foreach ($producer as $pro): ?>
			<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
			  <div class="card">
                    <a href="/cari.my/companies/collection/<?php echo $pro->id . '/' . $pro->company->id; ?>"><img class="card-img-top" src="<?php echo $this->request->webroot . '/img/collection/' . $pro->picture; ?>">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="<?php echo $this->request->webroot . '/img/logo/' . $pro->company->logo; ?>" class="profile-avatar" alt="">
                        </figure>
                        <a href="#" class="card-title mt-3" style="color:black;margin-bottom:8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?= $this->Html->link($pro->company->name, ['controller' => 'Companies', 'action' => 'profile', $pro->company->id])?></a>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $pro->created ?></h6>
						<hr>
                        <div class="card-text">
                            <a href="#" ><?= $this->Html->link(__($pro->name), ['controller' => 'companies', 'action' => 'collection', $pro->id, $pro->company->id]) ?></a>
                        </div>
                    </div>
                    <div class="card-footer">
						<div class="col-xs-2" style="text-align:left;">
							<button type="submit" class="btn btn-link" ><span class="glyphicon glyphicon-heart" style="color:red;"></span>
							</button>
						</div>
						<div class="col-xs-10" style="text-align:right;">
						<p style="color:gold;font-size:10px" >STARTING AT&nbsp;&nbsp;&nbsp;
							<span style="font-size:15px;font-weight:bold;"> RM<?= $pro->price; ?></span>
						</p>
						</div>
                    </div>
                </div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
</div>
<br/>
