<div class="actions">
	<h2><?php echo __('Menu'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php foreach ($menuCategories as $menuCategory): ?>
	<tr>
		<td><?php echo $this->Html->link($menuCategory['MenuCategory']['title'],array('controller'=>'menu_categories','action'=>'menu',$menuCategory['MenuCategory']['id'])); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
