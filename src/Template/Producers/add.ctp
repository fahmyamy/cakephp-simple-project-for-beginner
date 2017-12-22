<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producer $producer
 */
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Add Collection</h1>
  <h4>Make it for good</h4>
  <hr>
  <!-- category details section -->
  <div class="row">
    <div class="col-sm-12">
		<div class="row slideanim">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4" style="text-align:left;">
    <?= $this->Form->create($producer, ['type' => 'file']);
            echo $this->Form->control('name', array('type' => 'name', 'class' => 'form-control', 'id' => 'name'));
            echo $this->Form->control('price', array('type' => 'price', 'class' => 'form-control', 'id' => 'price'));
            echo $this->Form->control('picture', array('type' => 'file', 'class' => 'form-control', 'id' => 'picture'));
            echo $this->Form->control('description', array('type' => 'price', 'class' => 'form-control', 'id' => 'description'));
            echo $this->Form->control('service_id', ['options' => $services, 'class' => 'form-control']);
            echo $this->Form->control('company_id', ['options' => $companies, 'class' => 'form-control']); ?>
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
