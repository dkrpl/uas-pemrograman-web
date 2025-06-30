<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Rekammedik_model extends CI_Model {
    private $table = 'rekammedik';

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }

    public function get_with_relations() {
        $this->db->select('r.*, p.nama as pasien, d.nama as dokter, t.nama as tindakan');
        $this->db->from('rekammedik r');
        $this->db->join('pasien p', 'p.norm = r.norm');
        $this->db->join('dokter d', 'd.id = r.id_dokter');
        $this->db->join('tindakan t', 't.id = r.id_tindakan');
        return $this->db->get()->result();
    }
}
