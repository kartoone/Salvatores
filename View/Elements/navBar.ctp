<div class="actions" id="navBar">
	<table cellpadding="0" cellspacing="0">
            <tr>
		<td><?php echo $this->Html->link((__('Home')),'webroot/index.php'); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Menu')),array('controller'=>'locations')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Locations')),array('controller'=>'locations')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Reviews')),array('controller'=>'locations')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('About Us')),array('controller'=>'blocks','action'=>'AboutUs')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Contact Us')),array('controller'=>'locations')); ?>&nbsp;</td>
            </tr>
	</table>
</div>