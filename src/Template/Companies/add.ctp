<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Create Companies</h1>
  <h4>Change your life</h4>
  <hr>
  <!-- category details section -->
  <div class="row">
    <div class="col-sm-12">
		<div class="row slideanim">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4" style="text-align:left;">
			<?= $this->Form->create($company, ['type' => 'file']) ?>
			<?= $this->Form->control('name', array('type' => 'name', 'class' => 'form-control', 'id' => 'name')); ?>
            <?= $this->Form->control('address', array('type' => 'address', 'class' => 'form-control', 'id' => 'address')); ?>
            <?= $this->Form->control('logo', array('type' => 'file', 'class' => 'form-control', 'id' => 'logo')); ?>
            <?= $this->Form->control('description', array('type' => 'description', 'class' => 'form-control', 'id' => 'description')); ?>
			
			<?php $id = $this->request->query('user_id');
            echo $this->Form->hidden('user_id', ['value' => $id]); ?>
			<br />
			<?= $this->Form->submit('Submit', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;')); ?>
			<?= $this->Form->end(); ?>
		</div>
		<div class="col-sm-3">
		</div>
		</div>
	</div>
</div>
</div>
<br/>
<br/><br/><br/>
