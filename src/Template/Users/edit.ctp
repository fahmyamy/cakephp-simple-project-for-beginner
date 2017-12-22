<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <!-- profile info section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		<img src="<?php echo $this->request->webroot . '/img/avatar/' . $user->picture; ?>" class="profile-avatar" alt="">
		<h4 style="font-weight:bold;margin-bottom:10px;text-align:center;text-transform:capitalize;"><?= h($user->username) ?></h4>
		<p style="text-align:center;"><?= h($user->description) ?></p>
		<div class="row" style="text-align:center;">
			<div class="col-xs-7">
				<button class="btn btn-info" data-toggle="modal" data-target="#contactModal">Contact Me</button>
			</div>
			<div class="col-xs-2">
				<?= $this->Html->link(__('Edit'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-default btn-md']) ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12">
				<?= $this->Html->link(__('Delete Account'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-danger btn-md', 'style' => 'float:right;']) ?>
			</div>
		</div>
    </div>
    <div class="col-sm-10">
		<div class="col-xs-12 board">
					<p style="text-transform:capitalize;">Edit Profile</p>
				</div>
		<div>
			<div class="col-xs-3">
			</div>
			<div class="col-xs-6" style="text-align:left">
			<?php echo $this->Form->create($user, ['type' => 'file']);
					echo $this->Form->control('username', array('type' => 'username', 'class' => 'form-control', 'id' => 'username'));
					echo $this->Form->control('password', array('type' => 'password', 'class' => 'form-control', 'id' => 'password'));
					echo $this->Form->control('address', array('type' => 'address', 'class' => 'form-control', 'id' => 'address'));
					echo $this->Form->control('phonenum', array('type' => 'phonenum', 'class' => 'form-control', 'id' => 'phonenum'));
					echo $this->Form->control('email', array('type' => 'email', 'class' => 'form-control', 'id' => 'email'));
					echo $this->Form->control('picture', array('type' => 'file', 'class' => 'form-control', 'id' => 'picture'));
					echo $this->Form->control('privilege', array('type' => 'select', 'options' => array('null' => '--', 'finder' => 'Finder', 'admin' => 'Provider'), 'class' => 'form-control', 'id' => 'privilege'));
					echo $this->Form->control('description', array('type' => 'description', 'class' => 'form-control', 'id' => 'description'));
					echo '<br />';
					echo $this->Form->submit('Submit', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;'));
					echo $this->Form->end(); ?>
			</div>
		</div>
    </div>
  </div>
</div>

<!-- Modal (Contact Me)-->
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
		<p><span class="fa fa-facebook-square"></span> <?= h($user->username) ?>'s Address</p>
		<br>
	  </div>
	  <div class="col-sm-6" style="text-align:right;margin-right:10px;">
		<br>
		<p><?= h($user->phonenum) ?></p>
		<p><?= h($user->email) ?></p>
		<p><?= h($user->address) ?></p>
		<br>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>