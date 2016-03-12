<div class="testmails view">
<h2><?php echo __('Testmail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specify'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['specify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uf'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['uf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($testmail['Testmail']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Testmail'), array('action' => 'edit', $testmail['Testmail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Testmail'), array('action' => 'delete', $testmail['Testmail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $testmail['Testmail']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Testmails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testmail'), array('action' => 'add')); ?> </li>
	</ul>
</div>
