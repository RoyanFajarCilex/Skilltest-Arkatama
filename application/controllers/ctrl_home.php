<?php
class ctrl_home extends CI_Controller {
	public function index(){
        $data['judulhlm'] = 'Skilltest Arkatama';
        $data['nama'] = 'Royan Fajar Sultoni';
        $data['univ'] = 'Universitas Pembangunan Veteran Jawa Timur';
        $data['posisi'] = 'Programmer';
        $data['perusahaan'] = 'PT.Arkatama Multi Solusindo';
        $data['NPM'] = '200081010175';
        $this->load->view('templates/view_header', $data);
        $this->load->view('view_wlcm', $data);
    }
}