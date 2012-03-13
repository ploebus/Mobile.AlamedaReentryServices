<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Alameda Reentry Services Directory</title> 
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"/>
	
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.ui.map.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/local.js" type="text/javascript"></script>
	
</head>
<body>

<div data-role="page">
<div data-role="header" data-theme="a">
	<h3>Alameda Reentry Directory</h3>	
	<p>Select a category to begin</p>	
</div>
<div data-role="content" class="content">
	
	<ul data-role="listview">
		<?php foreach ($categories as $items):?>
			<?php foreach($items as $item):?>
			<li><?php echo anchor('welcome/subcategory/'.$item, $item, array('data-transition'=>'slide'));?></li>
			<?php endforeach;?>
		<?php endforeach;?>
	</ul>
	
</div>
<div data-role="footer">
<p>A project of InfoAlameda-a program of the Urban Strategies Council</p>
</div>
</div>
</body>
</html>