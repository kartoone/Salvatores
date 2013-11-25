<div class="menuItems view">
<h2><?php echo __('Menu Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menuItem['MenuCategory']['title'], array('controller' => 'menu_categories', 'action' => 'view', $menuItem['MenuCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tagline'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['tagline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($menuItem['MenuItem']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu Item'), array('action' => 'edit', $menuItem['MenuItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu Item'), array('action' => 'delete', $menuItem['MenuItem']['id']), null, __('Are you sure you want to delete # %s?', $menuItem['MenuItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Categories'), array('controller' => 'menu_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Category'), array('controller' => 'menu_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
