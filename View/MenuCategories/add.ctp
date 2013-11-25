<div class="menuCategories form">
<?php echo $this->Form->create('MenuCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Menu Category'); ?></legend>
	<?php
		echo $this->Form->input('parent_id',array('empty'=>true));
		echo $this->Form->input('title');
		echo $this->Form->input('order');
		echo $this->Form->input('tagline');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Menu Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menu Categories'), array('controller' => 'menu_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Menu Category'), array('controller' => 'menu_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Items'), array('controller' => 'menu_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Item'), array('controller' => 'menu_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
