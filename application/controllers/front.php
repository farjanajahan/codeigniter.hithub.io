<?php

class Front extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Welcome_model');
		$this->load->model('user_model');

		$this->load->library('form_validation');
		$this->load->database();
	
	}

	public function index()
	{
		$data['welcome']=$this->Welcome_model->get_welcome();
		$data['services']=$this->Welcome_model->get_services();
		$data['services_image']=$this->Welcome_model->get_services_images();
		$data['salon_image']=$this->Welcome_model->get_salon_image();		
		$data['special_offer']=$this->user_model->special_offer();
		$data['gallery_image']=$this->Welcome_model->get_gallery_image();			
		$this->load->view("front/header.php",$data);
		$this->load->view("front/aboutus.php",$data);
		$this->load->view("front/special_offer.php",$data);
		$this->load->view("front/skill.php",$data);
		$this->load->view("front/portfolio.php",$data);
		$this->load->view("front/contact.php");
		$this->load->view("front/footer.php");

	}
	
	public function front_contact(){
		//print "Malbub gasa rosha tola bari jabar por. Baja performence. Ja gora chilam shob dhala dia asa cha";	
		$this->form_validation->set_error_delimiters('','<br/>');
		$this->form_validation->set_rules('name','Name','required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('email','Email', 'required|min_length[1]|max_length[255]|valid_email');
        $this->form_validation->set_rules('contact','Contact', 'required|min_length[1]|max_length[125]|integer|is_natural');
		$this->form_validation->set_rules('service','Service','required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('cdate','Cdate','required|min_length[5]|max_length[20]');						


		if($this->form_validation->run()==FALSE){
		$data['welcome']=$this->Welcome_model->get_welcome();
		$data['services']=$this->Welcome_model->get_services();
		$data['services_image']=$this->Welcome_model->get_services_images();
		$data['salon_image']=$this->Welcome_model->get_salon_image();		

		$data['gallery_image']=$this->Welcome_model->get_gallery_image();			
			$data['page_title']="Booking";
					$this->load->view("front/header.php",$data);
		$this->load->view("front/aboutus.php",$data);
		$this->load->view("front/skill.php",$data);
		$this->load->view("front/portfolio.php",$data);
		$this->load->view("front/contact.php",$data);
		$this->load->view("front/footer.php");

			
		}
		else{
        $data = array(
            'name' => $this->input->post('name'),
            'email' =>$this->input->post('email'),
            'contact' =>$this->input->post('contact'),
            'service' =>$this->input->post('service'),
            'cdate' =>$this->input->post('cdate'),
			'comment' =>$this->input->post('comment'),

        );			
			if($this->Welcome_model->booking_insert($data)){
				redirect('front');
			}
			else {
				redirect('front');
			}
		}
										
	}
}