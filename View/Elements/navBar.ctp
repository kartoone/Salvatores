<div class="actions" id="navBar">
	<table cellpadding="0" cellspacing="0">
            <tr>
		<td id="red"><?php echo $this->Html->link((__('Home')),'webroot/index.php'); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Menu')),array('controller'=>'menu_categories')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Locations')),array('controller'=>'locations')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Reviews')),array('controller'=>'locations')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('About Us')),array('controller'=>'pages','action'=>'display','about_us')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Contact Us')),array('controller'=>'pages','action'=>'display', 'contactUs')); ?>&nbsp;</td>
            </tr>
	</table>
</div>
