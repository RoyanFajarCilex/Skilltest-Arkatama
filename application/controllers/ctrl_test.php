<?php
class ctrl_test extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('mdl_test');
        $this->load->library('form_validation');
    }
    public function index (){
        $data['datanya'] = $this->mdl_test->getAlldata();
        $data['judulhlm'] = 'Testing';
        $this->load->view('templates/view_header', $data);
        $this->load->view('view_test');
        
    }
    public function add(){
        $data['judulhlm'] = 'Form Testing Tambah Data';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('templates/view_header', $data);
            $this->load->view('view_test_add', $data);
        }
        else{
            $this->mdl_test->addData();
            $this->session->set_flashdata('tambah', 'ditambahkan');
            redirect('ctrl_test');
            echo "BERHASIL!!!!!";
        }
    }
    public function delete($id){
        $this->mdl_test->deleteData($id);
        $this->session->set_flashdata('tambah', 'dihapuskan');
        redirect('ctrl_test');
    }

    public function update($id){
        $data['datanya'] = $this->mdl_test->getDatabyID($id);
        $data['judulhlm'] = 'Form Update Data';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('templates/view_header', $data);
            $this->load->view('view_test_update', $data);
        }
        else{
            $this->mdl_test->updateData();
            $this->session->set_flashdata('tambah', 'diupdate');
            redirect('ctrl_test');
            echo "BERHASIL!!!!!";
        }
    }
}

?>