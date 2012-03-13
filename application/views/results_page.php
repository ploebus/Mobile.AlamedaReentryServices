
<div data-role="page" id="resultPage">
<div data-role="header">
<h3>Test Page</h3>	
</div>
<div data-role="content" class="content">
<script type="text/javascript">
		$(document).ready(function(){
	
				if(navigator.geolocation){
					navigator.geolocation.getCurrentPosition(function(position) {
					var lat=position.coords.latitude;
					var lng=position.coords.longitude;
					$('a.link').each(function(i){
						var originalHref = $(this).attr('href');
						$(this).attr('href', originalHref+'/'+lat+'/'+lng);
					});
				});
				
				}
				else
				{
					alert("no geolocation")
				}
		});
</script>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
<?php foreach ($locations as $items):?>
			<!--<li><a href='welcome/details/<?php echo $items['OrganizationName'];?>'><?php echo $items['OrganizationName'];?></a>-->
			<li><?php echo anchor('welcome/details/'.$items['OrganizationName'], $items['OrganizationName'], array('class'=>'link'));?></li>
		<?php endforeach;?>
</ul>


</div>
<div data-role="footer">
<p>Locations page</p>
</div>
</div>
