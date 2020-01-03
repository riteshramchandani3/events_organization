<?php

class Default_controller extends CI_Controller {

    public function index() {

        $this->load->view('welcome_screen');
    }

    public function enquiryForm() {

        $this->load->view('enquiry_form');
    }

    public function redirectHome() {
        $this->load->view('welcome_screen');
    }

    public function showRegisteredCustomers() {
        $this->load->view('registered_customer_details');
    }
    public function showGymCustomers() {
        $this->load->view('gym_members');
    }

    public function goToHome() {
        $this->load->view('Home');
    }

}

?>
