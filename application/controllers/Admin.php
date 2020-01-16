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
                $Loginid = $this->session->set_userdata('id', $login_id);
                echo $login_id;

                return redirect('Admin/welcome');
            } else {

                $this->session->set_flashdata('login_failed', 'Invalid ');
                return redirect('Admin/redirectLogin');
            }
        }
    }

    public function welcome() {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/redirectLogin');
        }
        $articals = $this->Login_model->articalList();
        $this->load->view('Admin/adminHome', ['articals' => $articals]);
    }

    public function redirectLogin() {
        $this->load->view('Admin/login');
    }

    public function logOut() {
        $this->session->unset_userdata('id');

        redirect('Admin/redirectLogin');
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

    public function add_articles() {

        $post = $this->input->post();
        if ($this->Login_model->add_articles($post)) {
            $this->session->set_flashdata('data_inserted', 'Article inserted Successfully ');
            return redirect('Admin/welcome' ,Admin::HTTP_OK);
        } else { 
            echo "failed";
        }
    }

    Public function addArticles() {

        $this->load->view('Admin/add_articles');
    }

    public function add_users() {
        $this->load->library('email');
        $this->form_validation->set_rules('username', 'Username', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == false) {

            $this->load->view('Users/signUp');
        } else {
            $post = $this->input->post();

            if ($this->Login_model->add_users($post)) {
                $this->session->set_flashdata('sign_up', 'SignUp  Successfully ');
                return redirect('Admin/redirectLogin');
            }
        }
    }

    public function deleteArticles($id) {

       // $id = $this->input->post('id');

        if ($this->Login_model->delArticles2($id)) {
            $this->session->set_flashdata('data_deleted', 'Article Deleted Successfully ');
            return redirect('Admin/welcome');
        } else {
            echo "failed";
        }
    }
    
    public function editUser($id){
        
       $rt = $this->Login_model->fetchArticle($id);
       print_r($rt);
        
    }

}

?>