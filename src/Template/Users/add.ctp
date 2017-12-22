<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
 
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Register</h1>
  <h4>Hey Freshie!!</h4><br>
  <hr>
  <!-- category details section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-3" >
		<h4 style="font-weight:bold;margin-bottom:10px;">Already Have Account?</h4>
		<?= $this->Html->link(__('Login'), ['controller' => 'users', 'action' => 'login'], ['class' => 'btn btn-primary btn-md']) ?>
    </div>
    <div class="col-sm-9">
		<div>
		<div class="col-sm-2">
		</div>
		<div class="col-sm-6" style="text-align:left">
			<?php echo $this->Form->create($user, ['type' => 'file']) ?>
			<?= $this->Form->control('username', array('type' => 'username', 'class' => 'form-control', 'id' => 'username')); ?>
			<?= $this->Form->control('password', array('type' => 'password', 'class' => 'form-control', 'id' => 'password')); ?>
			<?= $this->Form->control('address', array('type' => 'address', 'class' => 'form-control', 'id' => 'address')); ?>
			<?= $this->Form->control('phonenum', array('type' => 'phonenum', 'class' => 'form-control', 'id' => 'phonenum')); ?>
			<?= $this->Form->control('email', array('type' => 'email', 'class' => 'form-control', 'id' => 'email')); ?>
			<?= $this->Form->control('picture', array('type' => 'file', 'class' => 'form-control', 'id' => 'picture')); ?>
			<?= $this->Form->control('privilege', array('type' => 'select', 'options' => array('null' => 'Please Choose', 'finder' => 'Finder', 'admin' => 'Provider'), 'class' => 'form-control', 'id' => 'privilege')); ?>
			<?= $this->Form->control('description', array('type' => 'description', 'class' => 'form-control', 'id' => 'description')); ?>
			
			
			
			<br />
			<?= $this->Form->submit('Register', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;')); ?>
			<?= $this->Form->end();?>
		</div>
		</div>
	</div>
</div>
</div>