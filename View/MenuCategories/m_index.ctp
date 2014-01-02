<div class="menuCategories index">
	<h2><?php echo __('Salvatores Pizzeria Menu'); ?></h2>
        Choose from one of the categories below:
	<table cellpadding="0" cellspacing="0">
	<?php foreach ($menuCategories as $menuCategory): ?>
	<tr>
		<td><?php echo $this->Html->link($menuCategory['MenuCategory']['title'],array('controller'=>'menu_categories','action'=>'mobile_menu',$menuCategory['MenuCategory']['id'])); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>