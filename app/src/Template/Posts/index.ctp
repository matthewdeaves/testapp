<div class="posts index">
	<h2><?= __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id'); ?></th>
		<th><?= $this->Paginator->sort('title'); ?></th>
		<th><?= $this->Paginator->sort('content'); ?></th>
		<th><?= $this->Paginator->sort('user_id'); ?></th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?= h($post->id); ?>&nbsp;</td>
		<td><?= h($post->title); ?>&nbsp;</td>
		<td><?= h($post->content); ?>&nbsp;</td>
		<td>
			<?= $this->Html->link($post->user->id, ['controller' => 'Users', 'action' => 'view', $post->user->id]); ?>
		</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $post->id]); ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]); ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # %s?', $post->id)]); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p><?= $this->Paginator->counter(); ?></p>
	<ul class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next(__('next') . ' >');
	?>
	</ul>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('New Post'), ['action' => 'add']); ?></li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?> </li>
	</ul>
</div>
