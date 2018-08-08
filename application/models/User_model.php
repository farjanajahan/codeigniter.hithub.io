<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_check($email){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

	function get_booking_view(){
	return $this->db->get('booking');
	}
	function get_aboutus(){
	return $this->db->get('welcome');
	}
	public function booking_delete($id) {
		$delete = $this->db->delete('booking',array('id'=>$id));
        return $delete?true:false;
	}	
    public function about_edit($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('welcome', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	
	function get_services(){
	return $this->db->get('services');
	}
	
    public function services_edit($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('services', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	function get_service_image(){
	return $this->db->get('services_image');
	}
	public function service_image_edit($id){
	
	  $this->db->select('*');
	  $this->db->from('services_image');
	  $this->db->where('id',$id);
	
	  if($query=$this->db->get())
	  {
		  return $query->row_array();
	  }
	  else{
		return false;
	  }
	
	
	}
    public function service_image_update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('services_image', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }	
	
		
	
	function get_salon_image(){
	return $this->db->get('salon_image');
	}
	public function salon_image_edit($id){
	
	  $this->db->select('*');
	  $this->db->from('salon_image');
	  $this->db->where('id',$id);
	
	  if($query=$this->db->get())
	  {
		  return $query->row_array();
	  }
	  else{
		return false;
	  }
	
	
	}	
    public function salon_image_update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('salon_image', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }	
	function get_gallery(){
	return $this->db->get('gallery_image');
	}
	public function gallery_edit($id){
	
	  $this->db->select('*');
	  $this->db->from('gallery_image');
	  $this->db->where('id',$id);
	
	  if($query=$this->db->get())
	  {
		  return $query->row_array();
	  }
	  else{
		return false;
	  }
	
	
	}
    public function gallery_update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('gallery_image', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	
	function get_member(){
	return $this->db->get('user');
	}
	
	public function member_edit($id){
	
	  $this->db->select('*');
	  $this->db->from('user');
	  $this->db->where('user_id',$id);
	
	  if($query=$this->db->get())
	  {
		  return $query->row_array();
	  }
	  else{
		return false;
	  }
	
	
	}
	
    public function member_update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('user', $data, array('user_id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

	public function member_delete($id) {
		$delete = $this->db->delete('user',array('user_id'=>$id));
        return $delete?true:false;
	}
	function special_offer(){
	return $this->db->get('special_offer');
	}
	
	public function special_offer_edit($id){
	
	  $this->db->select('*');
	  $this->db->from('special_offer');
	  $this->db->where('id',$id);
	
	  if($query=$this->db->get())
	  {
		  return $query->row_array();
	  }
	  else{
		return false;
	  }
	
	
	}
    public function special_offer_update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('special_offer', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	
	public function special_offer_delete($id) {
		$delete = $this->db->delete('special_offer',array('id'=>$id));
        return $delete?true:false;
	}
	
	public function special_offer_add($user){
	
	
	$this->db->insert('special_offer', $user);
	
	}	
															
}


?>
