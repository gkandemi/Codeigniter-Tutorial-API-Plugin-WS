<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

//        http://kablosuzkedi.com/wp-content/uploads/2017/05/18192686_10154900742149998_5406271684373319978_o-945x709.jpg

        $this->load->helper("download");

        $data = "Merhabalar benim adim kablosuzkedi... Kanalıma hoşgeldiniz...";

        $img = file_get_contents("http://kablosuzkedi.com/wp-content/uploads/2017/05/18192686_10154900742149998_5406271684373319978_o-945x709.jpg");

//        force_download("nargile.png", $img);

		$this->load->view('welcome_message');
	}

	public function test(){

	    echo "Test";

    }
}
