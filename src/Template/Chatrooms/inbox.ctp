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
    <div class="col-sm-10">
		<div class="col-xs-12 board">
			<p><?= $cname; ?>'s Collection</p>
		</div>
		<div class="row slideanim">
			<div class="col-xs-7">
				<table class="table table-bordered" style="text-align:left;">
					<tbody>
					<?php foreach ($chatroom as $chat): ?>
					  <tr>
						<td style="width:445px"><p style="font-size:18px;text-transform:capitalize;color:black;"><?= h($chat->user->username) ?><span style="font-size:10px;color:grey;">&nbsp;&nbsp;&nbsp;&nbsp;<?= h($chat->created) ?></span></p>
						<p style="font-size:13px"><?= h($chat->chatlog) ?></p></td>
						<td>
						<?= $this->Html->link(__('View'), ['controller' => 'Chatrooms', 'action' => 'index', $id], ['class' => 'btn btn-default btn-md', 'style' => 'margin-top:15px;']) ?>
						<?= $this->Form->postLink(__('Delete'), ['controller' => 'Chatrooms', 'action' => 'delete', $id], ['class' => 'btn btn-danger btn-md', 'style' => 'margin-top:15px;'], ['confirm' => __('Are you sure you want to delete # {0}?', $id)]) ?></td>
					  </tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
    </div>
  </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>