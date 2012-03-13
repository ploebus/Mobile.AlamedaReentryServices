<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('reentry_model');
		$this->load->helper('url');
		$data['categories'] = $this->reentry_model->get_categories();
		
		$this->load->view('welcome_message',$data);
	}
	public function subcategory($category)
	{
		$this->load->model('reentry_model');
		$this->load->helper('url');
		$data['subcategories']=$this->reentry_model->get_subcategories($category);
		$this->load->view('subcategory',$data);
	}
	public function locations($service)
	{
		$this->load->model('reentry_model');
		$this->load->helper('url');
		echo $service;
		$data['locations']=$this->reentry_model->get_locations($service);
		$this->load->view('results_page',$data);
	}
	public function details($location,$lat,$long)
	{
		$this->load->model('reentry_model');
		$this->load->helper('url');
		
		$data['details']=$this->reentry_model->get_details($location,$lat,$long);
		$this->load->view('details_page',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */