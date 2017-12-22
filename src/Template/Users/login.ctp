<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Login</h1>
  <h4>Change your life</h4><br>
  <hr>
  <!-- category details section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-3" >
		<h4 style="font-weight:bold;margin-bottom:10px;">New User??</h4>
		<?= $this->Html->link(__('Register'), ['controller' => 'users', 'action' => 'add'], ['class' => 'btn btn-primary btn-md']) ?>
    </div>
    <div class="col-sm-9">
		<div>
		<div class="col-sm-2">
		</div>
		<div class="col-sm-6" style="text-align:left">
			<?= $this->Form->create(); ?>
			<?= $this->Form->input('username', array('type' => 'username', 'class' => 'form-control', 'id' => 'username')); ?>
			<?= $this->Form->input('password', array('type' => 'password', 'class' => 'form-control', 'id' => 'password')); ?>
			<br />
			<?= $this->Form->submit('Login', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;')); ?>
			<?= $this->Form->end(); ?>
		</div>
		</div>
	</div>
</div>
</div>
<br/>
<br/><br/><br/><br/><br/>
