<div class="locations form">
<?php echo $this->Form->create('Location'); ?>
	<fieldset>
		<legend><?php echo __('Add Location'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('addr1');
		echo $this->Form->input('addr2');
		echo $this->Form->input('phone');
		echo $this->Form->input('hourshtml');
		echo $this->Form->input('googlemapcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li>
	</ul>
</div>
