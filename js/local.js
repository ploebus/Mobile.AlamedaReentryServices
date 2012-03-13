
var uniqueNumber=1;
var theMap = "hide";
	
		$('#detail').live("pageshow",function(event){
                // Also works with: var yourStartLatLng = '59.3426606750, 18.0736160278';
					alert("New Location");
					var identifier = '#map_canvas'+uniqueNumber;
						$(identifier).remove();
					$('.detailContent').append("<div id='map_canvas"+uniqueNumber+"' style='display:none;height:250px;width:250px'/>");
					$(identifier).hide();
					uniqueNumber= uniqueNumber + 1;
					//$('#map_canvas').gmap('refresh');
				var yourStartLatLng = new google.maps.LatLng(37.813581,-122.249794);
					$(identifier).gmap({'center': yourStartLatLng});
				
				$(identifier).hide();
				
				<?php foreach ($details as $item):?>
					$(identifier).gmap('addMarker',{position:new google.maps.LatLng(<?php echo $item->latitude.','.$item->longitude ?>)});	
				
				//remove event from this page
				
					//ADD INFOWINDOW HERE
				
				<?php endforeach;?>
				
				if(navigator.geolocation){
					
						//alert("hello");		

					   navigator.geolocation.getCurrentPosition(function(position) {  
						$(identifier).gmap('addMarker',		{position:new google.maps.LatLng(position.coords.latitude,position.coords.longitude)
																
															});	
					});  
				}
				else
				{
				alert("Your location is unknown to this browser");
				}
		
			
		$(".btnMap").click(function(){
				//alert("here");
				if(theMap=="hide"){
					theMap="show";
					$(identifier).show();
				}
				else{
				theMap="hide";
					$(identifier).hide();
				}
				});
			
				
		});	