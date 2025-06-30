<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pasien_model extends CI_Model {
    private $table = 'pasien';

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($norm) {
        return $this->db->get_where($this->table, ['norm' => $norm])->row();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($norm, $data) {
        return $this->db->where('norm', $norm)->update($this->table, $data);
    }

    public function delete($norm) {
        return $this->db->where('norm', $norm)->delete($this->table);
    }
}
