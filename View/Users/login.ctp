<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Enter your information below'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--<?php echo $this->element('menu'); ?>-->

<div class="actions">
	<h3><?php echo __('Are you a new user?'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Create New Account'), array('action' => 'add')); ?> </li>
                
	</ul>
</div>
