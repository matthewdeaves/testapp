<div class="users view">
	<h2><?= __('User'); ?></h2>
	<dl>
		<dt><?= __('Id'); ?></dt>
		<dd>
			<?= h($user->id); ?>
			&nbsp;
		</dd>
		<dt><?= __('Username'); ?></dt>
		<dd>
			<?= h($user->username); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]); ?> </li>
		<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # %s?', $user->id)]); ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New User'), ['action' => 'add']); ?> </li>
		<li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?= __('Related Posts'); ?></h3>
	<?php if (!empty($user->posts)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id'); ?></th>
			<th><?= __('Title'); ?></th>
			<th><?= __('Content'); ?></th>
			<th><?= __('User Id'); ?></th>
			<th class="actions"><?= __('Actions'); ?></th>
		</tr>
		<?php foreach ($user->posts as $posts): ?>
		<tr>
			<td><?= h($posts->id) ?></td>
			<td><?= h($posts->title) ?></td>
			<td><?= h($posts->content) ?></td>
			<td><?= h($posts->user_id) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]); ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]); ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # %s?', $posts->id)]); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']); ?> </li>
		</ul>
	</div>
</div>
