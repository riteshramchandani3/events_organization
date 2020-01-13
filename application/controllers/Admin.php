<?php

class Admin extends CI_Controller {

    public function index() {

        $this->form_validation->set_rules('username', 'Username', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/login');
        } else {
            $username = $this->input->post('username');
            $password = ($this->input->post('password'));

            $login_id = $this->Login_model->isValidLogin($username, $password);
          
            if ($login_id) {
              $Loginid= $this->session->set_userdata('id', $login_id);
              echo $login_id;

                return redirect('Admin/welcome');
            } else {

                echo "Failed";
            }
        }
    }

    public function welcome() {
        $articals = $this->Login_model->articalList();
        $this->load->view('Admin/adminHome', ['articals' => $articals]);
    }

    public function signUp() {
        $this->load->library('email');
        $this->form_validation->set_rules('username', 'Username', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == false) {

            $this->load->view('Users/signUp');
        } else {
            $to_email = $this->input->post('email');

            $this->email->from('jobet20762@oncloud.ws');
            $this->email->to($to_email);
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');
            $this->email->send();
           // show_error($this->email->print_debugger());
            echo "mail sent";
        }
    }

}

?>