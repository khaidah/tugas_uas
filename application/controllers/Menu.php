<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('Menu_model');
    }
	public function index()
	{
		$data['judul'] = 'Data Menu';
		$data['menu'] = $this->Menu_model->getAllMenu();
        if($this->input->post('cari')){
            $data['menu']=$this->Menu_model->cariData();
        }
		$this->load->view('templates/header',$data);
		$this->load->view('Menu/index',$data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
        $data['judul'] = 'Tambah Data';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('Menu/Menu_tambah');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Menu_model->tambahDataMenu();
			$this->session->set_flashdata('flash','Ditambahkan');
            redirect('Menu');
        }
       
	}
	public function hapus($id)
	{
		$this->Menu_model->hapusData($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('Menu');
	}
    public function detail($id){
        $data['Menu'] = $this->Menu_model->getMenuById($id);
        $data['judul'] ='Detail Data Menu';
        $this->load->view('templates/header',$data);
        $this->load->view('Menu/Menu_detail',$data);
        $this->load->view('templates/footer');
    }
    public function ubah($id)
        {
            $data['judul'] = 'Ubah Data';
            $data['Menu'] = $this->Menu_model->getMenuById($id);
         
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('qty', 'Tempat', 'required');
            $this->form_validation->set_rules('price', 'price', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header',$data);
                $this->load->view('Menu/Menu_edit',$data);
                $this->load->view('templates/footer');
            }
            else
            {
                $this->Menu_model->ubahdata($id);
                $this->session->set_flashdata('flash','DiUbah');
                redirect('Menu');
            }
        }
}
