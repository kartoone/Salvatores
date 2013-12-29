<div class="menuCategories index">
	<h2><?php echo __('Locations'); ?></h2>
	
	<?php foreach ($locations as $location): ?>
	
		
		<h3><?php echo h($location['Location']['title']); ?>&nbsp;</h3>
		<p><?php echo h($location['Location']['addr1']); ?>&nbsp;</p>
		<p><?php echo h($location['Location']['addr2']); ?>&nbsp;</p>
		<p><?php echo h($location['Location']['phone']); ?>&nbsp;</p>
		<p><?php echo h($location['Location']['hourshtml']); ?>&nbsp;</p>
		<p><?php echo h($location['Location']['googlemapcode']); ?>&nbsp;</p>
	
	
<?php endforeach; ?>
	
	
	</div>
</div>
