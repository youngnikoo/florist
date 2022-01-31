<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Mcrud');
		$this->load->model('Mlogin');
		if(empty($this->session->userdata('username')) and $this->session->userdata('level') != 'admin' ){
			redirect('login');
		}
	}

    public function index(){
		$data['sba'] = '';
      $data['sbp'] = '';
      $data['sbpr'] = '';
      $data['sbt'] = 'mm-active';
      $data['sbu'] = '';
	  $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $data['tsk'] = $this->Mcrud->join('tbl_order o','tbl_member m','o.idKonsumen=m.idKonsumen')->result();
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$data['knf'] = $this->Mcrud->get_all_data('tbl_konfirmasi')->result();
		$this->template->load('layout','admin/transaksi_main',$data);
    }
	
}