<div data-role="page" data-title="detail" id="detail">
<div data-role="header">
	<h3>Details Page</h3>
	<a data-rel="back" data-role="button">Back</a>	
	<a  class="btnMap" data-role="button">Map</a>	
</div>
<div data-role="content" class="detailContent">
		<?php foreach ($details as $item):?>
			<div data-role="collapsible" data-collapsed="true" data-theme="c">
				<h3> <?php echo $item->SiteName;?> <?php echo round($item->distance,2)?> miles</h3>
				<?php echo $item->SiteAddress;?><br />
				<?php echo $item->City;?><br/>
				<?php //echo $item->Office Telephone Number;?><br/>
				</p>
			</div>
		<?php endforeach;?>
</div>
<div data-role="footer">
<p>A test page</p>
</div>
</div>
