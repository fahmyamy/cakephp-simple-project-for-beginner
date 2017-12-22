<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chatroom $chatroom
 */
 $id = null;
?>
<!-- Container (Card Section) -->
<div id="category" class="container-fluid text-center">
  <!-- profile info section -->
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		<img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" class="profile-avatar" alt="">
		<?php foreach ($comp as $c): 
			$id = $c->id; ?>
		<h4 style="font-weight:bold;margin-bottom:10px;text-align:center;"><?= $cname = h($c->name) ?></h4>
		<p style="text-align:center;"><?= h($c->description) ?></p>
		<div class="row" style="text-align:center;">
			<div class="col-xs-7">
				<button class="btn btn-info" data-toggle="modal" data-target="#contactModal">Contact Me</button>
			</div>
			<div class="col-xs-2">
				<?php if ($this->request->session()->read('Auth.User')){
							echo $this->Html->link(__('Profile'), ['controller' => 'Companies', 'action' => 'profile', $c->id], ['class' => 'btn btn-default btn-md']); 
					  }else{
							echo $this->Html->link(__('Chat'), ['controller' => 'chatrooms', 'action' => 'chat', $company->id], ['class' => 'btn btn-default btn-md']); 
					  }
				?>
			</div>
		</div>
		<?php endforeach; ?>
		<br>
    </div>
    	<!-- Chat room -->
    <div class="col-sm-8" style>
		<div class="col-sm-12" style="background-color:lightgrey;height:550px;">
			<div class="col-sm-2" style="text-align:right;background-color:white;margin-top:15px;height:80px">
				<img src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif" style="border-radius:50%;margin-top:13px;margin-left:25px;" width="50px" height="50px" />
			</div>
			<?php foreach ($chatroom as $chat): ?>
			<div class="col-sm-10" style="text-align:left;background-color:white;margin-top:15px;height:80px">
				<h4 style="text-transform:capitalize;"><?= h($chat->user->username) ?></h4>
				<!--<h5 style="margin-top:-20px;"></h5>-->
			</div>
			<?php endforeach; ?>
			<div class="col-sm-9" style="text-align:right;background-color:white;height:390px;border-top:1px solid #ccc;border-right:1px solid #ccc;">
			</div>
			<div class="col-sm-3" style="text-align:left;background-color:white;height:390px;border-top:1px solid #ccc;">
			</div>
			<div class="col-sm-9" style="text-align:right;background-color:white;height:50px;border-top:1px solid #ccc;border-right:1px solid #ccc;">
			<input type="text" class="form-control" placeholder="Type a message.." style="border:0px;margin-top:5px;focus-outline:none;" />
			</div>
			<div class="col-sm-3" style="text-align:left;background-color:white;height:50px;border-top:1px solid #ccc;">
			</div>
		</div>
	</div>
  </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>