<?php

class Customer_details extends CI_Controller {

    public function customerDetails() {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('height', 'Height', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('enquiry_form');
        } else {

            $data['name'] = $this->input->post('name');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            $data['occupation'] = $this->input->post('occupation');
            $data['age'] = $this->input->post('age');
            $data['address'] = $this->input->post('address');
            $data['dob'] = $this->input->post('dob');
            $data['height'] = $this->input->post('height');
            $data['weight'] = $this->input->post('weight');
            $data['package'] = $this->input->post('package');


            $details = $this->Customer_details_mdl->addCustomers($data);
            if ($details == TRUE) {
                $this->session->set_flashdata("success", "<h4><center>Regesterd Successfully </center></h4>");

                redirect('Default_controller/redirectHome');
            } else {
                $this->session->set_flashdata("failure", "Failed");
                redirect('Default_controller/redirectHome');
            }
        }
    }

    public function deleteRegisteredCustomer() {
        $id = $_GET['id'];
        $j = $this->Customer_details_mdl->deleteRegisteredCustomer($id);

        if ($j == TRUE) {

            redirect('Default_controller/showRegisteredCustomers');
        }
    }

    public function convertToGymMember() {
        $id = $_GET['id'];

        $j = $this->Customer_details_mdl->updateToGymMember($id);

        if ($j == TRUE) {

            redirect('Default_controller/showRegisteredCustomers');
        }
    }

    public function updateDate($package) {
        $id = $_GET['id'];
        
        $j = $this->Customer_details_mdl->getGymCustomersPkage($package);
        
        if ($package == '1 Month') {

            $j = $this->Customer_details_mdl->updateDate($id);
        }

        if ($package == '3 Month') {

            $j = $this->Customer_details_mdl->updateDateThreeMonth($id);
        }
        if ($package == '6 Month') {

            $j = $this->Customer_details_mdl->updateDateForSixMonth($id);
        }
    }

}

?>