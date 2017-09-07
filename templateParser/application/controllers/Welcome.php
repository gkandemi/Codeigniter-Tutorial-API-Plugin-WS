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

//	    $viewData = new stdClass();
//
//	    $viewData->courses = $this->db->get("course")->result();
//        $viewData->title = "Kurs Listesi";
//
//		$this->load->view('welcome_message', $viewData);


        $this->load->library("parser");

        $viewData = array(
            "title" => "Kurs Listesi",
            "courses"   => $this->db->get("course")->result()

        );

        $template = "{courses} {title} {/courses}";

        $data = array(
            "kanalAdi"  => "kablosuzkedi",
            "kanalSahibi"   => "Gokhan Kandemir",
            "courses"   => $this->db->get("course")->result()
        );

//        $this->parser->parse_string($template, $data);
        $this->parser->parse("course_list_template", $viewData);

	}
}
