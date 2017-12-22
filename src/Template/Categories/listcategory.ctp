<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
 */
?>
<div id="services" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Service Categories</h1>
  <h4>Make Your Life Simple</h4><br>
  <br>
  <div class="row slideanim">
  <?php foreach ($category as $category): ?>
    <div class="col-sm-4">
      <a href="../services/listservice/<?php echo $category->id . '/' . $category->name; ?>" class="darken"><img src="<?php echo $this->request->webroot . $category->picture; ?>" class="img-rounded" width="260" height="150"></a>
      <h4><?= $this->Html->link(__($category->name), ['controller' => 'services', 'action' => 'listservice', $category->id, $category->name], ['style' => 'color:black;text-decoration:none;']) ?></h4>
	  <br /><br />
	</div>
   <?php endforeach; ?>
   </div>
</div>