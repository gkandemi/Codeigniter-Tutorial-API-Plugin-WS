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


		$viewData = new stdClass();
		$this->db->order_by("rank", "ASC");
		$viewData->items = $this->db->get("items")->result();
		$viewData->test = "Gokhan Kandemir";

		$this->load->view('welcome_message',$viewData);
	}
	
	public function rankOrder(){

		parse_str($this->input->post("data"), $order);

		$items = $order["ord"];

		foreach ($items as $rank => $id){

			$this->db
				->where(array("id" => $id, "rank !=" => $rank))
				->update("items", array("rank" => $rank));
		}



	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */