<div class="testmails index">
	<h2><?php echo __('Testmails'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('specify'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('uf'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($testmails as $testmail): ?>
	<tr>
		<td><?php echo h($testmail['Testmail']['id']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['name']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['email']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['phone']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['specify']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['city']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['uf']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['message']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['created']); ?>&nbsp;</td>
		<td><?php echo h($testmail['Testmail']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $testmail['Testmail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $testmail['Testmail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $testmail['Testmail']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Testmail'), array('action' => 'add')); ?></li>
	</ul>
</div>
