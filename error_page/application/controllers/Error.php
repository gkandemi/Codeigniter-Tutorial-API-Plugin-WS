<?php

class Error extends CI_Controller {

    public function index(){

    }

    public function ci404(){

        $this->output->set_status_header('404');

        $this->load->view("not_found");

    }

}
