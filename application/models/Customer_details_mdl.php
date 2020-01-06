<?php

class Customer_details_mdl extends CI_Model {

    public function addCustomers($data) {
        $this->db->insert('temp_customer', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getRegisterdCustomers() {

        $a = $this->db->get('temp_customer');
        return $a->result_array();
    }

    public function getGymCustomers() {
        $this->db->where('status', 'Active');
        $a = $this->db->get('temp_customer');
        return $a->result_array();
    }

    public function getGymCustomersPkage($package) {
        $this->db->where('package', $package);
        $a = $this->db->get('temp_customer');
        return $a->result_array();
    }

    public function deleteRegisteredCustomer($id) {
        $this->db->where('id', $id);
        $this->db->delete('temp_customer');
        return true;
    }

    public function updateToGymMember($id) {

        $this->db->where('id', $id);
        $data['status'] = 'Active';
        $this->db->set('date', 'NOW()', FALSE);
        $this->db->update('temp_customer', $data);
        return true;
    }

}

?>