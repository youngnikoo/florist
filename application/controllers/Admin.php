<?php 
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->model('Mlogin');
		if(empty($this->session->userdata('username')) and $this->session->userdata('level') != 'admin' ){
			redirect('login');
		}
	}

	public function index(){
		$data['sba'] = 'mm-active';
		$data['sbp'] = '';
		$data['sbpr'] = '';
		$data['sbt'] = '';
		$data['sbu'] = '';
		$data['uname'] = '';
		$data['ct'] = $this->Mcrud->get_all_data('tbl_order')->num_rows();
		$data['cp'] = $this->Mcrud->get_all_data('tbl_produk')->num_rows();
		$data['cm'] = $this->Mcrud->get_by_id('tbl_member',array('status' => 'member'))->num_rows();
		$data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$data['member'] = $this->Mcrud->get_all_data('tbl_member')->result();
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$data['produk'] = $this->Mcrud->join('tbl_produk p','tbl_kategori k','k.idKat=p.idKat')->result();
		$this->template->load('layout','main',$data);
	}

	public function user(){
		$data['sba'] = '';
		$data['sbp'] = '';
		$data['sbpr'] = '';
		$data['sbt'] = '';
		$data['sbu'] = 'mm-active';
		$data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$data['member'] = $this->Mcrud->get_all_data('tbl_member')->result();
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout','admin/user_main',$data);
	}

	public function edit_user($id){
		$data['sba'] = '';
		$data['sbp'] = '';
		$data['sbpr'] = '';
		$data['sbt'] = '';
		$data['sbu'] = 'mm-active';
		$dataWhere = array('idKonsumen' => $id);
		$data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$data['member'] = $this->Mcrud->get_by_id('tbl_member',$dataWhere)->row_object();
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout','admin/edit_user',$data);
	}

	public function update_user(){
		$id = $this->input->post('id');
		$usr = $this->input->post('username');
		$nama = $this->input->post('nama');
		$almt = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$em = $this->input->post('email');
		$tlp = $this->input->post('tlpn');
		$pass = $this->input->post('passwd');
		$dataUpdate = array('username' => $usr,
							'namaKonsumen' => $nama,
							'alamat' => $almt,
							'idKota' => $kota,
							'email' => $em,
							'tlpn' => $tlp,
							'passwd' => $pass
					);
		$this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
		$this->session->set_flashdata('alert', 'diubah');
		redirect('admin/user');
	}

	public function simpan_user(){
		$usr = $this->input->post('username');
		$nama = $this->input->post('nama');
		$almt = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$em = $this->input->post('email');
		$tlp = $this->input->post('tlpn');
		$pass = $this->input->post('passwd');
		$st = $this->input->post('stat');
		$dataInsert = array('username' => $usr,
							'namaKonsumen' => $nama,
							'alamat' => $almt,
							'idKota' => $kota,
							'email' => $em,
							'tlpn' => $tlp,
							'passwd' => $pass,
							'status' => $st
					);
		$cek = $this->Mcrud->get_by_id('tbl_member',array('username' => $usr));
		if($cek->num_rows() > 0){
			$this->session->set_flashdata('alert', 'ada');
			redirect('admin/user');
		}else{
			$this->session->set_flashdata('alert', 'ditambahkan');
			$this->Mcrud->insert('tbl_member',$dataInsert);
			redirect('admin/user');
		}
	}

	public function delete_user($id){
		$where = array('idKonsumen' => $id);
		$this->Mcrud->deletekat($where,'tbl_member');
		$error = $this->db->error();
		if ($error['code'] != 0 ) {
            $this->session->set_flashdata('alert','gagalhapus');
        }
        else{
            $this->session->set_flashdata('alert','dihapus');
        }
		redirect('admin/user');
	}
}