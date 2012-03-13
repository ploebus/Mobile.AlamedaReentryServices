
<div data-role="page">
<div data-role="header">
	<h3>Alameda Reentry Directory</h3>	
	<p>Select a subcategory </p>	
</div>
<div data-role="content">
	<ul data-role="listview">
	<?php foreach ($subcategories as $items): ?>
		<?php foreach ($items as $item): ?>
		<li><?php echo anchor('welcome/locations/'.$item, $item, array('data-transition'=>'slide'));?></li>
		
		<?php endforeach; ?>
	<?php endforeach; ?>
	</ul>
</div>
<div data-role="footer">
	<p>A project of InfoAlameda-a program of the Urban Strategies Council</p>
</div>
</div>
