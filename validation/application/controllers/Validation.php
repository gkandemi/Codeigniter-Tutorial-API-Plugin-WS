<?php

class Validation extends CI_Controller
{

    public function index()
    {
        $this->load->view("form_view");
    }

    public function save()
    {

        $this->load->library("form_validation");

        $this->form_validation->set_rules("full_name","Ad Soyad","required|trim");
        $this->form_validation->set_rules("email", "E-posta", "required|trim|valid_email|is_unique[member.email]");
        $this->form_validation->set_rules("password", "Şifre", "required|trim|min_length[6]|max_length[8]");
        $this->form_validation->set_rules("re_password", "Tekrar Şifre", "required|trim|min_length[6]|max_length[8]|matches[password]");

        $error_messages = array(
            "required"  => "<strong>{field}</strong>   alanını doldurmak zorundasınız",
            "valid_email"   => "Lütfen geçerli bir {field} adresi giriniz",
            "is_unique"     => "Girmiş olduğunuz {field} ile zaten bir kayıt vardır",
            "matches"       => "Girmiş olduğunuz şifreler birbirleriyle uyuşmuyor"
        );

        $this->form_validation->set_message($error_messages);

        if($this->form_validation->run() == FALSE){
            echo validation_errors();
        }


    }

}
