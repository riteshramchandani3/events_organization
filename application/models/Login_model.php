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

        $q = $this->db->select()
                        ->from('articles')
                        ->where(['user_id' => $id])->get();

        return $q->result();
    }

    public function add_articles($array) {
        $affected_rows = $this->db->insert('articles', $array);

        return $affected_rows;
    }

    public function add_users($array) {
        $affected_rows = $this->db->insert('users', $array);
        return $affected_rows;
    }

    public function delArticles2($id) {
        $this->db->where('id', $id);
        return $this->db->delete('articles');
    }

    public function delArticles($id) {

        return $this->db->delete('articles', ['id' => $id]);
    }

    public function fetchArticle($id) {
        $r = $this->db->select()
                ->where('id', $id)
                ->get('articles');

        return $r->row();
    }

}
?>

