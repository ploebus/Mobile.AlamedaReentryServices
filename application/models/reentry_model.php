<?php

class Reentry_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		$this->load->database();	
    }
	
	function get_categories()
	{
		
		$query = $this->db->query('SELECT name FROM service_group');
		
		return $query->result_array();
		}
		
	function get_subcategories($category)
	{
		echo $category;
		$query = $this->db->query('SELECT service.name FROM service,service_group 
		WHERE service.service_group_id=service_group.service_group_id and service_group.name	 like ?', array($category));
		return $query->result_array();

		
	}
	
	function get_locations($service)
		{
			$service=urldecode($service);
			
			$str='SELECT DISTINCT location.OrganizationName FROM location,service,location_service_xref
												WHERE service.name like "'.$service.'" and
												service.service_id=location_service_xref.service_id and
												location_service_xref.location_id=location.location_id';
				echo $str;
			$query=$this->db->query($str);
			
			return $query->result_array();
		}
	
	function get_details($location,$lat,$long)
		{
			$this->load->helper('geo_helper');
			$location=urldecode($location);
			
			$query=$this->db->query('SELECT DISTINCT SiteName,SiteAddress,City,`Zip Code`, `Office Telephone Number`,latitude,longitude FROM location
												WHERE  OrganizationName like ?',array($location));;
			
			$available=array();
			foreach($query->result() as $row)
			{
				$row->distance=distance($lat,$long,$row->latitude,$row->longitude);
				array_push($available,$row);
				
			}
			asort($available,"distance");
			return $available;
		}
	function distance($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi') { 
		$theta = $longitude1 - $longitude2; 
		$distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
		$distance = acos($distance); $distance = rad2deg($distance); 
		$distance = $distance * 60 * 1.1515; 
		switch($unit) { 
			case 'Mi': break; 
			case 'Km' : $distance = $distance * 1.609344; 
			} 
		return (round($distance,2)); 
	
	}


}