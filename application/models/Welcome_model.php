<?php
class Welcome_model extends CI_model{
	function __construct(){
	parent::__construct();
	}
	function get_welcome(){
	return $this->db->get('welcome');
	}
	function get_services(){
	return $this->db->get('services');
	}
	
	function get_services_images(){
	return $this->db->get('services_image');
	}
	
	function get_salon_image(){
	return $this->db->get('salon_image');
	}
	
	function get_gallery_image(){
	return $this->db->get('gallery_image');
	}
	public function booking_insert($data){
		if($this->db->insert('booking',$data)) {
			return true;
		}else{
			return false;
		}
	}					
}