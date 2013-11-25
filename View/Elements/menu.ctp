<div class="actions">
	<h2><?php echo __('Menu'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php foreach ($menuCategories as $menuCategory): ?>
	<tr>
		<td><?php echo h($menuCategory['MenuCategory']['title']); ?>&nbsp;</td>
		<td><?php echo h($menuCategory['MenuCategory']['tagline']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
