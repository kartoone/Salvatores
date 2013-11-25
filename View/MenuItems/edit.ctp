<div class="menuItems form">
<?php echo $this->Form->create('MenuItem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Menu Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('menu_category_id');
		echo $this->Form->input('order');
		echo $this->Form->input('title');
		echo $this->Form->input('tagline');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MenuItem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MenuItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Menu Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menu Categories'), array('controller' => 'menu_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Category'), array('controller' => 'menu_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
