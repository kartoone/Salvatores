<div class="menuCategories view">
<h2><?php echo __('Menu Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menuCategory['MenuCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Menu Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menuCategory['ParentMenuCategory']['title'], array('controller' => 'menu_categories', 'action' => 'view', $menuCategory['ParentMenuCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($menuCategory['MenuCategory']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($menuCategory['MenuCategory']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tagline'); ?></dt>
		<dd>
			<?php echo h($menuCategory['MenuCategory']['tagline']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu Category'), array('action' => 'edit', $menuCategory['MenuCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu Category'), array('action' => 'delete', $menuCategory['MenuCategory']['id']), null, __('Are you sure you want to delete # %s?', $menuCategory['MenuCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Categories'), array('controller' => 'menu_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Menu Category'), array('controller' => 'menu_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Items'), array('controller' => 'menu_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Item'), array('controller' => 'menu_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Menu Categories'); ?></h3>
	<?php if (!empty($menuCategory['ChildMenuCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Tagline'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($menuCategory['ChildMenuCategory'] as $childMenuCategory): ?>
		<tr>
			<td><?php echo $childMenuCategory['id']; ?></td>
			<td><?php echo $childMenuCategory['parent_id']; ?></td>
			<td><?php echo $childMenuCategory['title']; ?></td>
			<td><?php echo $childMenuCategory['order']; ?></td>
			<td><?php echo $childMenuCategory['tagline']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menu_categories', 'action' => 'view', $childMenuCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menu_categories', 'action' => 'edit', $childMenuCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menu_categories', 'action' => 'delete', $childMenuCategory['id']), null, __('Are you sure you want to delete # %s?', $childMenuCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Menu Category'), array('controller' => 'menu_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Menu Items'); ?></h3>
	<?php if (!empty($menuCategory['MenuItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Menu Category Id'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($menuCategory['MenuItem'] as $menuItem): ?>
		<tr>
			<td><?php echo $menuItem['id']; ?></td>
			<td><?php echo $menuItem['menu_category_id']; ?></td>
			<td><?php echo $menuItem['order']; ?></td>
			<td><?php echo $menuItem['title']; ?></td>
			<td><?php echo $menuItem['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menu_items', 'action' => 'view', $menuItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menu_items', 'action' => 'edit', $menuItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menu_items', 'action' => 'delete', $menuItem['id']), null, __('Are you sure you want to delete # %s?', $menuItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Menu Item'), array('controller' => 'menu_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
