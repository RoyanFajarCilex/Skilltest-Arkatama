<?php
    class mdl_test extends CI_Model{
        public function getAlldata(){
            $query = $this->db->get('skilltest');
            return $query->result_array();
        }
        public function addData(){
            $data = [
                "nama"=> $this->input->post('nama', true),
                "umur"=> $this->input->post('umur', true),
                "kota" => $this->input->post('kota', true)
            ];
            $this->db->insert('skilltest', $data);
        }
        public function deleteData($id){
            $this->db->where('id_org', $id);
            $this->db->delete('skilltest');
        }
        public function getDatabyID($id){
            return $this->db->get_where('skilltest', ['id_org' => $id])->row_array();
        }
        public function updateData(){
            $data = [
                "nama"=> $this->input->post('nama', true),
                "umur"=> $this->input->post('umur', true),
                "kota" => $this->input->post('kota', true)
            ];
            $this->db->where('id_org', $this->input->post('id_org'));
            $this->db->update('skilltest', $data);
        }
    }