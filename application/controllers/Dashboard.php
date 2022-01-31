<?php 
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->model('Mlogin');
	}

	public function index(){
		$data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$data['member'] = $this->Mcrud->get_all_data('tbl_member')->result();
		$this->template->load('layout_user','test');
	}
}