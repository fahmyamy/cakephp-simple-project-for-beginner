<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
 echo $this->Html->css('pricetable.css');
 echo $this->Html->css('comment.css');
 $user_id = $this->request->session()->read('Auth.User.id');
 $user_pic = $this->request->session()->read('Auth.User.picture');
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
			<h3 style="text-align:left;margin-left:25px;color:black"><?= h($comp->name) ?></h3>
			<h6 style="text-align:left;margin-left:25px;color:grey"><?= h($comp->created) ?></h6>
			<hr/>
		<div class="col-sm-7">
		<div style="border:1px;text-align:left;margin-left:10px;margin-right:10px;">
			<ul class="nav nav-tabs" id="tabContent">
				<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
				<li><a href="#price" data-toggle="tab">Price</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="overview">

						<!-- Details tab -->
				   <div class="control-group">
					   <label class="control-label">
					   <br/>
							<img src="<?php echo $this->request->webroot . '/img/collection/' . $comp->picture; ?>" class="img-rounded" style="align:left;" width="500" height="200">
							<h4>This service provided by <?= h($company->name) ?></h4>
							<h4><?= h($comp->description) ?></h4>
					   </label>
				   </div>
				</div>
				<div class="tab-pane" id="price">
					<div id="pricing-table" class="clear" style="margin-top:30px;">
					<div class="plan">
						<h3>Standard<span>RM<?= $comp->price; ?></span></h3>       
						<ul>
							<li><b>5</b> Difference of Paperwork</li>
							<li><b>Medium</b> Quality</li>
							<li><b>Fixed</b> Format Types</li>	
							<li><b>Limited</b> Requirements</li>							
						</ul> 
					</div>
					<div class="plan" id="most-popular">
						<h3>Premium<span>RM<?= $comp->price+150; ?></span></h3>       
						<ul>
							<li><b>10</b> Difference of Paperwork</li>
							<li><b>Higher</b> Quality</li>
							<li><b>Vary</b> Format Types</li>
							<li><b>Unlimited</b> Requirements</li>			
						</ul>    
					</div>
					<div class="plan">
						<h3>Deluxe<span>RM<?= $comp->price+50; ?></span></h3>
						<ul>
							<li><b>8</b> Difference of Paperwork</li>
							<li><b>High</b> Quality</li>
							<li><b>Fixed</b> Format Types</li>
							<li><b>Limited</b> Requirements</li>			
						</ul>
					</div>	
					</div>
				</div> 
			</div>
			
			
			</div>
		  </div>
		  <div class="col-sm-5">
		  <button class="btn btn-info"><?= $this->Html->link(__("To Company's Collection"), ['action' => 'profile', $getid], ['style' => 'color:white;text-decoration:none;']) ?></button>
			<?php 
				if($this->request->session()->read('Auth.User')){
					echo "<div class='col-sm-10' style='background-color:#f2f2f2;border-radius:7px;margin-top:35px'>";
					echo "<h4 style='margin-bottom:0.5px;'>Comments</h4>";
					echo '<div class="col-sm-3">';
					echo '<br />'
					?> <img src="<?php echo $this->request->webroot . '/img/avatar/' . $user_pic; ?>" width="50px" height="50px" style="border-radius:100px;margin-bottom:100px;"/> <?php
					echo '</div>';
					echo '<div class="col-sm-9">';
						echo $this->Form->create($chatroom);
						  echo $this->Form->control('chatlog', array('label' => '', 'type' => 'textarea', 'class' => 'form-control', 'id' => 'chatlog', 'placeholder' => 'Add comment...'));
						  echo $this->Form->hidden('description', ['value' => 'unchecked']);
						  echo $this->Form->hidden('company_id', ['value' => $getid]);
						  echo $this->Form->hidden('user_id', ['value' => $user_id]);
						  echo '<br />';
						  echo $this->Form->submit('Comment', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;'));
						  echo $this->Form->end(); 
						echo '<br/><br/>';
						echo '</div>';
					echo '</div>';
					}?>
			<?php foreach($result as $chat):?>
			<div class="col-sm-10" style="background-color:#f2f2f2;border-radius:7px;margin-top:35px;word-wrap:break-word;" >
				<div class="col-sm-3">
				<br />
				<img src="<?php echo $this->request->webroot . '/img/avatar/' . $chat->user->picture; ?>" width="50px" height="50px" style="border-radius:100px;margin-bottom:100px;"/>
				</div>
				<div class="col-sm-9">
				<p style="text-align:left;margin-top:25px;margin-bottom:1px;font-size:17px;text-transform:capitalize;color:black;"><?= $chat->user->username; ?></p>
				<p style="text-align:left;font-size:10px;"><?= $chat->created; ?></p>
				<hr style="border:0.5px solid darkgrey;margin-bottom:2px;" />
				<p style="text-align:left;font-size:20px;color:black;"><?= $chat->chatlog; ?></p>
				<?php 
				if($this->request->session()->read('Auth.User.id') != $company->user_id){	
				
				}
				else {
					echo $this->Form->postLink(__('Delete'), ['controller' => 'chatrooms', 'action' => 'delete', $chat->id, $getpid, $getid], ['style' => 'font-size:12px;margin-left:150px;'], ['confirm' => __('Are you sure you want to delete # {0}?', $chat->id)]); 
				} ?>
				
				</div>
			</div>
			<?php endforeach; ?>
			<div class="col-sm-10">
			<div class="paginator">
			<ul class="pagination">
				<?= $this->Paginator->first('<< ' . __('first')) ?>
				<?= $this->Paginator->prev('< ' . __('previous')) ?>
				<?= $this->Paginator->numbers() ?>
				<?= $this->Paginator->next(__('next') . ' >') ?>
				<?= $this->Paginator->last(__('last') . ' >>') ?>
			</ul>
			<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
			</div>
			</div>
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