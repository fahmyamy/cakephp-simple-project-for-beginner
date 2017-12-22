<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <!-- profile info section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		<img src="<?php echo $this->request->webroot . '/img/logo/' . $company->logo; ?>" class="profile-avatar" alt="">
		<h4 style="font-weight:bold;margin-bottom:10px;text-align:center;"><?= h($company->name) ?></h4>
		<p style="text-align:center;"><?= h($company->description) ?></p>
		<div class="row" style="text-align:center;">
			<div class="col-xs-7">
				<button class="btn btn-info" data-toggle="modal" data-target="#contactModal">Contact Me</button>
			</div>
			<div class="col-xs-2">
				<?php 
				if($this->request->session()->read('Auth.User.id') != $company->user_id){	
				
				}
				else {
					echo $this->Html->link(__('Add'), ['controller' => 'producers', 'action' => 'add', $company->id], ['class' => 'btn btn-default btn-md']); 
				}
				?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-6">
				<p style="color:black;" ><span class="glyphicon glyphicon-map-marker" style="color:grey;"></span> From</p>
			</div>
			<div class="col-xs-6">
				<p style="text-align:right;"><?= h($company->address) ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<p style="color:black;" ><span class="glyphicon glyphicon-calendar" style="color:grey;"></span> Since</p>
			</div>
			<div class="col-xs-6">
				<p style="text-align:right;"><?= h($company->user->created) ?></p>
			</div>
		</div>
    </div>
    <div class="col-sm-10">
		<div class="col-xs-12 board">
			<p><?= h($company->name) ?>'s Collection</p>
		</div>
		<div class="row slideanim">
			<?php foreach ($company->producers as $pro): ?>
			<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
			  <div class="card">
                    <a href="/cari.my/companies/collection/<?php echo $pro->id . '/' . $company->id; ?>"><img class="card-img-top" src="<?php echo $this->request->webroot . '/img/collection/' . $pro->picture; ?>"></a>
                    <div class="card-block">
                        <figure class="profile">
                            <img src="<?php echo $this->request->webroot . '/img/logo/' . $company->logo; ?>" class="profile-avatar" alt="">
                        </figure>
                        <a href="profile.html" class="card-title mt-3" style="color:black;margin-bottom:8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?= $this->Html->link($company->name, ['action' => 'profile', $company->id])?></a>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $pro->created ?></h6>
						<hr>
                        <div class="card-text">
                            <a href="#" ><?= $this->Html->link(__($pro->name), ['action' => 'collection', $pro->id, $company->id]) ?></a>
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

<!-- Modal (Contact Me) -->
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs" style="width:460px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Me</h4>
      </div>
	  <div class="col-sm-5" style="text-align:left;margin-left:10px;">
		<br>
			<p><span class="glyphicon glyphicon-phone"></span> Phone Number</p>
			<p><span class="glyphicon glyphicon-envelope"></span> Email</p>
			<p><span class="fa fa-facebook-square"></span> <?= h($company->user->username) ?>'s Address</p>
		<?php} else {
				
				
		}?>
		<br>
	  </div>
	  <div class="col-sm-6" style="text-align:right;margin-right:10px;">
		<br>
		<?php if ($this->request->session()->read('Auth.User')){
				echo '<p>' . h($company->user->phonenum) . '</p>';
				echo '<p>' . h($company->user->email) . '</p>';
				echo '<p>' . h($company->user->address) . '</p>';
			  } else {
				echo '<p><i>Hide</i></p>';
				echo '<p><i>Hide</i></p>';
				echo '<p><i>Hide</i></p>';
			  }?>
		<br>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>