<div class="navBar" id="navBar">
	<table>
            <tr>
		<td id="red"><?php echo $this->Html->link((__('Home')),array('controller'=>'menu_categories','action'=>'home')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Menu')),array('controller'=>'menu_categories', 'action'=>'index')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Locations')),array('controller'=>'locations')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Reviews')),array('controller'=>'pages','action'=>'display', 'reviews')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('About Us')),array('controller'=>'pages','action'=>'display','about_us')); ?>&nbsp;</td>
		<td id="red"><?php echo $this->Html->link((__('Contact Us')),array('controller'=>'pages','action'=>'display', 'contactUs')); ?>&nbsp;</td>
            </tr>
	</table>
</div>
