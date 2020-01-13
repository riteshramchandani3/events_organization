<?php

class Login_model extends CI_Model {

    public function isValidLogin($username, $password) {

        $q = $this->db->where(['username' => $username, 'password' => $password])->get('users');

        if ($q->num_rows()) {
            return $q->row()->id;
        } else {
            return false;
        }
    }

    public function articalList() {

        $id = $this->session->userdata('id');

        $q = $this->db->select('article_title, article,id')
                        ->from('articles')
                        ->where(['user_id' => $id])->get();

        return $q->result();
    }

}
?>

