<?php

class Default_controller extends CI_Controller {

    public function index() {

        $this->load->view('welcome_screen');
    }

    public function enquiryForm() {

        $this->load->view('enquiry_form');
    }

}

?>
