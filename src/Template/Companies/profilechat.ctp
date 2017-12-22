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
		<img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
		<h4 style="font-weight:bold;margin-bottom:10px;text-align:center;"><?= h($company->name) ?></h4>
		<p style="text-align:center;"><?= h($company->description) ?></p>
		<div class="row" style="text-align:center;">
			<div class="col-xs-7">
				<button class="btn btn-info" data-toggle="modal" data-target="#contactModal">Contact Me</button>
			</div>
			<div class="col-xs-2">
				<a href="inbox.html" class="btn btn-default" >Chat</a>
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
		<div class="row">
			<div class="col-xs-8">
				<p style="color:black;" ><span class="glyphicon glyphicon-file" style="color:grey;"></span> Task Finished</p>
			</div>
			<div class="col-xs-4">
				<p style="text-align:right;">100</p>
			</div>
		</div>
			<button class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#detailModal">More Details</button>
    </div>
	<?= $this->Flash->render() ?>
        <?= $this->fetch('inbox'); ?>
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
		<p><?= h($company->user->phonenum) ?></p>
		<p><?= h($company->user->email) ?></p>
		<p><?= h($company->user->address) ?></p>
		<br>
	  </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal (More Details) -->
<div id="detailModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs" tyle="width:200px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="border:0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?= h($company->user->username) ?></h4>
      </div>
	  <div style="border:0px;margin-left:10px;margin-right:10px;">
		<ul class="nav nav-tabs" id="tabContent">
			<li class="active"><a href="#details" data-toggle="tab">Description</a></li>
			<li><a href="#access-security" data-toggle="tab">Language</a></li>
			<li><a href="#networking" data-toggle="tab">Skills</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="details">

					<!-- Details tab -->
			   <div class="control-group">
				   <label class="control-label">aaaaaaaaaaaaaaaaaaaaaaa</label>
			   </div>
			</div>

			<div class="tab-pane" id="access-security">
				<label class="control-label">aaaaaaaaaaaaaaaaaaaaaaa</label>
			</div> 
			<div class="tab-pane" id="networking">
				<label class="control-label">aaaaaaaaaaaaaaaaaaaaaaa</label>
			</div> 
		</div>
	  </div>
      <div class="modal-footer">
		
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>