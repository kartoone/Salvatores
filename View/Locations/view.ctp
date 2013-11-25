<div class="locations view">
<h2><?php echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($location['Location']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Addr1'); ?></dt>
		<dd>
			<?php echo h($location['Location']['addr1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Addr2'); ?></dt>
		<dd>
			<?php echo h($location['Location']['addr2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($location['Location']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hourshtml'); ?></dt>
		<dd>
			<?php echo h($location['Location']['hourshtml']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Googlemapcode'); ?></dt>
		<dd>
			<?php echo h($location['Location']['googlemapcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
	</ul>
</div>
