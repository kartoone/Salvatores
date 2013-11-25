<div class="orderDetails view">
<h2><?php echo __('Order Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderDetail['OrderDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderDetail['Order']['id'], array('controller' => 'orders', 'action' => 'view', $orderDetail['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderDetail['MenuItem']['title'], array('controller' => 'menu_items', 'action' => 'view', $orderDetail['MenuItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($orderDetail['OrderDetail']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order Detail'), array('action' => 'edit', $orderDetail['OrderDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order Detail'), array('action' => 'delete', $orderDetail['OrderDetail']['id']), null, __('Are you sure you want to delete # %s?', $orderDetail['OrderDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Items'), array('controller' => 'menu_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Item'), array('controller' => 'menu_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
