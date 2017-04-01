<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaptchaTest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
    }

    public function index()
	{


	    $this->load->helper("captcha");

        $vals = array(
//            'word'          => 'Random word',
            'img_path'      => 'captcha_folder/',
            'img_url'       => 'http://localhost/captcha_kontrol/captcha_folder/',
            'font_path'     => 'fonts/corbel.ttf',
            'img_width'     => 200,
            'img_height'    => 50,
            'word_length'   => 5,
            'font_size'     => 20,
            'img_id'        => 'Imageid',
            'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'        => array(
                'background' => array(0, 0, 0),
                'border' => array(255, 255, 255),
                'text' => array(255, 255, 255),
                'grid' => array(255, 0, 0)
            )
        );


        $captcha = create_captcha($vals);

        $viewData = array(
            "captcha"   => $captcha
        );


        $this->session->set_userdata("captcha_code", $captcha["word"]);

		$this->load->view('form_view', $viewData);
	}

	public function validate(){

        $personel_adi = $this->input->post("personel_adi");
        $captcha      = $this->input->post("captcha");
        $captcha_code = $this->session->userdata("captcha_code");

        if($captcha == $captcha_code){

            echo "İşlem Başarılıdır!!!!";

        }else {

            echo "Doğrulama kodu yanlıştır!!!";

        }


    }
}
