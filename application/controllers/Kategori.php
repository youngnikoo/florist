<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
	}

	public function index(){
		$data['tt'] = 'Manajemen Kategori';
		$data['sb'] = '';
		$data['kr'] = '';
		$data['kt'] = '';
		$data['jp'] = '';
		$data['ok'] = '';
		$data['mm'] = '';
		$data['tk'] = '';
		$data['sk'] = 'active';
		$data['nama'] = $this->session->userdata('userName');
		$data['level'] = $this->session->userdata('level');
		$data['cekombak'] = $this->Mcrud->cek('tbl_kategori');
		$data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->session->set_flashdata('add','Data berhasil ditambahkan');
		$this->template->load('layout_admin','admin/kategori/index',$data);
	}

	public function add(){
		$data['tt'] = 'Tambah Kategori';
		$data['kr'] = '';
		$data['sb'] = '';
		$data['kt'] = '';
		$data['jp'] = '';
		$data['ok'] = '';
		$data['mm'] = '';
		$data['tk'] = '';
		$data['sk'] = 'active';
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('userName');
		$this->session->set_flashdata('add','Data berhasil ditambahkan');
		$this->template->load('layout_admin','admin/kategori/form_add',$data);
	}

	public function save(){
		$data['nama'] = $this->session->userdata('userName');
		$namaKategori = $this->input->post('namaKategori');
		$dataInsert = array('namaKat' => $namaKategori);
		$cek = $this->Mcrud->get_by_id('tbl_kategori', $dataInsert);

		if ($namaKategori==NULL){
			$this->session->set_flashdata('alert','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Data belum ditambahkan!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
			redirect('kategori/add');
		}else{
			if($cek->num_rows() == 1){
				$this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Data sudah ada!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                redirect('kategori/add');
			}else{
				$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Data berhasil ditambahkan!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
				$this->Mcrud->insert('tbl_kategori',$dataInsert);
				redirect('kategori');
			}
		}
	}

	public function getid($id){
		$data['tt'] = 'Edit Kategori';
		$data['sb'] = '';
		$data['kr'] = '';
		$data['kt'] = '';
		$data['jp'] = '';
		$data['ok'] = '';
		$data['mm'] = '';
		$data['tk'] = '';
		$data['sk'] = 'active';
		$data['level'] = $this->session->userdata('level');
		$data['nama'] = $this->session->userdata('userName');
		$dataWhere = array('idKat' => $id);
		$data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori',$dataWhere)->row_object();
		$this->template->load('layout_admin','admin/kategori/form_edit',$data);
	}

	public function edit(){
		$id = $this->input->post('id');
		$namaKategori = $this->input->post('namaKategori');
		$dataUpdate = array('namaKat' => $namaKategori);
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idKat', $id);
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Data berhasil diedit!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
		redirect('kategori');
	}

	public function delete_kat($id){
		$where = array('idKat' => $id);
		$this->Mcrud->deletekat($where,'tbl_kategori');
		$this->session->set_flashdata('alert','<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Data berhasil dihapus!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
		redirect('kategori');
	}
}
