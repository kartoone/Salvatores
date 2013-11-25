<div class="blocks form">
<?php echo $this->Form->create('Block'); ?>
	<fieldset>
		<legend><?php echo __('Add Block'); ?></legend>
	<?php
		echo $this->Form->input('page');
		echo $this->Form->input('order');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Blocks'), array('action' => 'index')); ?></li>
	</ul>
</div>
