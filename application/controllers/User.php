<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
			$this->load->helper('form');
			$this->load->library('form_validation');
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
	
$this->load->view("register.php");
}

public function register_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        //print_r($user);

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}

public function login_view(){

$this->load->view("login.php");

}

function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
		$this->load->view("header.php");

        $this->load->view('user_profile.php');
		$this->load->view("footer.php");

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");
	
      }


}

function user_profile(){

$this->load->view('user_profile.php');

}

function booking(){
$this->load->view("header.php");	
//print "Waz monojogi hoi";
$data['booking_view']=$this->user_model->get_booking_view();

$this->load->view('booking_view.php',$data);
$this->load->view("footer.php");
}

function aboutus(){
$this->load->view("header.php");	
$data['aboutus']=$this->user_model->get_aboutus();

$this->load->view('aboutus_view.php',$data);
$this->load->view("footer.php");
}
function aboutus_edit(){
		$id = $this->input->post('id');
        $data = array(
            'description' => $this->input->post('about'),


        );
					
			if($this->user_model->about_edit($data,$id)){
				redirect('user/aboutus');
			}
			else {
				redirect('user/aboutus');
			}
}
function services(){
$this->load->view("header.php");	
$data['services']=$this->user_model->get_services();

$this->load->view('services_view.php',$data);
$this->load->view("footer.php");
}

function services_edit(){
		$id = $this->input->post('id');
        $data = array(
            'description' => $this->input->post('about'),


        );
					
			if($this->user_model->services_edit($data,$id)){
				redirect('user/services');
			}
			else {
				redirect('user/services');
			}
}
function service_image(){
$this->load->view("header.php");	
$data['service_image']=$this->user_model->get_service_image();

$this->load->view('service_image_view.php',$data);
$this->load->view("footer.php");
}
function service_image_edit(){
			$this->load->view("header.php");

		$id = $this->input->get('id');
		$data['service']= $this->user_model->service_image_edit($id);
		
		
		$this->load->view('service_image_update',$data);
				$this->load->view("footer.php");

}
function service_image_update(){
		$id = $this->input->post('id');
		
        $data = array(
            'image_name' => $_FILES['userfile']['name'],
        );
			if($this->user_model->service_image_update($data,$id)){
				//redirect('user/gallery');
			}
			else {
				//redirect('user/gallery');
			}
	$config['upload_path']=base_url().'img';
	$config['allowed_types']='gif|jpg|png|jpeg';
	$config['max_size']='100000';
	
	$this->load->library('upload',$config);
	if(!$this->upload->do_upload()){
		//Upload error,display form & errors
		//$data['error']=$this->upload->display_errors();
		//$this->load->view('gallery_update',$data);
		}

		else{//Success,display success message
			//$data['upload_data']=$this->upload->data();
			//$data['success']=TRUE;
			redirect('user/service_image');
	}
	redirect('user/service_image');	
	}

function salon_image(){
$this->load->view("header.php");	
$data['salon_image']=$this->user_model->get_salon_image();

$this->load->view('salon_image_view.php',$data);
$this->load->view("footer.php");
}
function salon_image_edit(){
			$this->load->view("header.php");

		$id = $this->input->get('id');
		$data['salon']= $this->user_model->salon_image_edit($id);
		
		
		$this->load->view('salon_image_update',$data);
				$this->load->view("footer.php");

}
function salon_image_update(){
		$id = $this->input->post('id');
		
        $data = array(
            'image_name' => $_FILES['userfile']['name'],
        );
			if($this->user_model->salon_image_update($data,$id)){
				//redirect('user/gallery');
			}
			else {
				//redirect('user/gallery');
			}
	$config['upload_path']=base_url().'img';
	$config['allowed_types']='gif|jpg|png|jpeg';
	$config['max_size']='100000';
	
	$this->load->library('upload',$config);
	if(!$this->upload->do_upload()){
		//Upload error,display form & errors
		//$data['error']=$this->upload->display_errors();
		//$this->load->view('gallery_update',$data);
		}

		else{//Success,display success message
			//$data['upload_data']=$this->upload->data();
			//$data['success']=TRUE;
			redirect('user/salon_image');
	}
	redirect('user/salon_image');	
	}

function gallery(){
$this->load->view("header.php");	
$data['gallery']=$this->user_model->get_gallery();

$this->load->view('gallery_view.php',$data);
$this->load->view("footer.php");
}
function gallery_edit(){
			$this->load->view("header.php");

		$id = $this->input->get('id');
		$data['gallery']= $this->user_model->gallery_edit($id);
		
		
		$this->load->view('gallery_update',$data);
				$this->load->view("footer.php");

}
function gallery_update(){
		$id = $this->input->post('id');
		
        $data = array(
            'image_name' => $_FILES['userfile']['name'],
        );
			if($this->user_model->gallery_update($data,$id)){
				//redirect('user/gallery');
			}
			else {
				//redirect('user/gallery');
			}
	$config['upload_path']=base_url().'img';
	$config['allowed_types']='gif|jpg|png|jpeg';
	$config['max_size']='100000';
	
	$this->load->library('upload',$config);
	if(!$this->upload->do_upload()){
		//Upload error,display form & errors
		//$data['error']=$this->upload->display_errors();
		//$this->load->view('gallery_update',$data);
		}

		else{//Success,display success message
			//$data['upload_data']=$this->upload->data();
			//$data['success']=TRUE;
			redirect('user/gallery');
	}
	redirect('user/gallery');	
	}



function member(){
$this->load->view("header.php");	
$data['member']=$this->user_model->get_member();

$this->load->view('member_view.php',$data);
$this->load->view("footer.php");
}
function member_edit(){
		$this->load->view("header.php");

		$id = $this->input->get('id');
		$data['member']= $this->user_model->member_edit($id);
		
		$this->load->view('member_update',$data);
				$this->load->view("footer.php");

}

function member_update(){
		$id = $this->input->post('id');
        $data = array(
            'user_name' => $this->input->post('name'),
            'user_email' => $this->input->post('email'),
            'user_password' => $this->input->post('password'),
            'user_age' => $this->input->post('age'),
            'user_mobile' => $this->input->post('mobile'),


        );
					
			if($this->user_model->member_update($data,$id)){
				redirect('user/member');
			}
			else {
				redirect('user/member');
			}
}

public function special_offer(){
	$this->load->view("header.php");
	$data['special_offer']=$this->user_model->special_offer();
	$this->load->view('special_offer_view',$data);
	$this->load->view("footer.php");	
}

function special_offer_edit(){
		$this->load->view("header.php");

		$id = $this->input->get('id');
		$data['special_offer']= $this->user_model->special_offer_edit($id);
		
		$this->load->view('special_offer_update',$data);
		$this->load->view("footer.php");

}

function special_offer_update(){
		$id = $this->input->post('id');
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),



        );
					
			if($this->user_model->special_offer_update($data,$id)){
				redirect('user/special_offer');
			}
			else {
				redirect('user/special_offer');
			}
}

public function member_delete(){
	$id = $this->input->get('id');
	if($this->user_model->member_delete($id)){
		redirect('user/member');
	}
	else {
		redirect('user/member');
	}	
}

public function special_offer_delete(){
	$id = $this->input->get('id');
	if($this->user_model->special_offer_delete($id)){
		redirect('user/special_offer');
	}
	else {
		redirect('user/special_offer');
	}	
}
public function booking_delete(){
	$id = $this->input->get('id');
	if($this->user_model->booking_delete($id)){
		redirect('user/booking');
	}
	else {
		redirect('user/booking');
	}	
}
public function special_offer_add(){
	
		$this->form_validation->set_error_delimiters('','<br/>');
		$this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('description','Description', 'required');
	if($this->form_validation->run()==FALSE){
		$this->load->view("header.php");
		$this->load->view('special_offer_add');
		$this->load->view("footer.php");
	}
	else {
	$data = array(
		'title' => $this->input->post('title'),
		'description' => $this->input->post('description'),
		'status' => 1, 
	
	);
	if($this->user_model->special_offer_add($data)){
		redirect('user/special_offer');
	}
	else {
		redirect('user/special_offer');
	}
	}
	
	
}

public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
