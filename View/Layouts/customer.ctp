<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Salvatore's Pizzeria: 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.customer');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
                    <?php echo $this->Html->image('SalvatoresBanner.png'); ?>
			<h1>Welcome to Salvatore's Pizzeria</h1>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
                        <?php echo $this->element('menu'); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
                    &copy; 2013 Salvatore's Pizzeria
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
