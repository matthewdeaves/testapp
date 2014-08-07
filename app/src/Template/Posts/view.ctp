<div class="posts view">
	<h2><?= __('Post'); ?></h2>
	<dl>
		<dt><?= __('Id'); ?></dt>
		<dd>
			<?= h($post->id); ?>
			&nbsp;
		</dd>
		<dt><?= __('Title'); ?></dt>
		<dd>
			<?= h($post->title); ?>
			&nbsp;
		</dd>
		<dt><?= __('Content'); ?></dt>
		<dd>
			<?= h($post->content); ?>
			&nbsp;
		</dd>
		<dt><?= __('User'); ?></dt>
		<dd>
			<?= $this->Html->link($post->user->id, ['controller' => 'Users', 'action' => 'view', $post->user->id]); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]); ?> </li>
		<li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # %s?', $post->id)]); ?> </li>
		<li><?= $this->Html->link(__('List Posts'), ['action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Post'), ['action' => 'add']); ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?> </li>
	</ul>
</div>
