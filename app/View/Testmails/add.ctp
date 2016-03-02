<div class="testmails form">
<?php echo $this->Form->create('Testmail'); ?>
	<fieldset>
		<legend><?php echo __('Add Testmail'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('specify');
		echo $this->Form->input('city');
		echo $this->Form->input('uf');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Testmails'), array('action' => 'index')); ?></li>
	</ul>
</div>
