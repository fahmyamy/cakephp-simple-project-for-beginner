<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
  $this->extend('profilechat');
 $this->start('inbox');

?>
<div class="col-sm-10">
		<div class="col-xs-12 board">
			<p><?= h($company->name) ?>'s Inbox</p>
		</div>
		<div class="row slideanim">
			<div class="col-xs-10">
			 <?php if (!empty($company->chatrooms)): ?>
				
				<table class="table table-bordered" style="text-align:left;">
					<tbody>
					<?php foreach ($company->chatrooms as $chatrooms): ?>
					  <tr>
						<td style="width:658px;"><br/>
						<?= h($chatrooms->chatlog) ?>
						</td>
						<td>
						<?= $this->Html->link(__('View'), ['controller' => 'Chatrooms', 'action' => 'view', $chatrooms->id], ['class' => 'btn btn-default btn-md']) ?>
						<?= $this->Html->link(__('Edit'), ['controller' => 'Chatrooms', 'action' => 'edit', $chatrooms->id], ['class' => 'btn btn-info btn-md']) ?>
						<?= $this->Form->postLink(__('Delete'), ['controller' => 'Chatrooms', 'action' => 'delete', $chatrooms->id], ['class' => 'btn btn-danger btn-md'], ['confirm' => __('Are you sure you want to delete # {0}?', $chatrooms->id)]) ?></td>
					  </tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>
			</div>
		</div>
    </div>
  </div>
</div>

<?php foreach ($company->users as $users): 
		echo $users->username;
	  endforeach;
?>

<div class="related">
        <h4><?= __('Related Chatrooms') ?></h4>
        <?php if (!empty($company->chatrooms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Chatlog') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->chatrooms as $chatrooms): ?>
            <tr>
                <td><?= h($chatrooms->id) ?></td>
                <td><?= h($chatrooms->chatlog) ?></td>
                <td><?= h($chatrooms->description) ?></td>
                <td><?= h($chatrooms->created) ?></td>
                <td><?= h($chatrooms->company_id) ?></td>
                <td><?= h($chatrooms->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Chatrooms', 'action' => 'view', $chatrooms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Chatrooms', 'action' => 'edit', $chatrooms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chatrooms', 'action' => 'delete', $chatrooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatrooms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
<?= $this->end(); ?>