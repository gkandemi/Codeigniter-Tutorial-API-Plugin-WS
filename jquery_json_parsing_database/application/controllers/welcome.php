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
	 * @see http://codeigniter.com/user_g
	 * uide/general/urls.html
	 */
	public function index()
	{


		$rows = $this->db->get("product")->result();

		$viewData = new stdClass();
		$viewData->rows = $rows;


		$this->load->view('welcome_message', $viewData);
	}


	public function get_product_list(){

		$rows = $this->db->get("product")->result();

		echo json_encode($rows, true);
	}



	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */