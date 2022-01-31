<?php
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->model('Mlogin');
	}

	public function index(){
		$this->template->load('layout_login','form_login');
	}

	public function aksi_login(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Mlogin->cek_login($u, $p);
		$lvl = $cek->row();
		if ($cek->row() == 1){
			$data_session = array(
				'username' => $u,
				'nama' => $lvl->namaKonsumen,
				'level' => $lvl->status,
				'email' => $lvl->email,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('alert','logged');
			if($this->session->userdata('level') == 'admin'){
				redirect('admin');
			}else{
				redirect('user');
			}
		} else {
			$this->session->set_flashdata('alert','galog');
			redirect('login');
		}
	}

	public function register(){
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout_login','form_register',$data);
	}

	public function register_user(){
		$usr = $this->input->post('username');
		$nama = $this->input->post('nama');
		$almt = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$em = $this->input->post('email');
		$tlp = $this->input->post('tlpn');
		$pass = $this->input->post('passwd');
		$st = $this->input->post('stat');
		$qa = $this->input->post('qa');
		$cb = $this->input->post('check');
		$dataInsert = array('username' => $usr,
							'namaKonsumen' => $nama,
							'alamat' => $almt,
							'idKota' => $kota,
							'email' => $em,
							'tlpn' => $tlp,
							'passwd' => $pass,
							'qa' => $qa,
							'status' => $st
					);
		$cek = $this->Mcrud->get_by_id('tbl_member',array('username' => $usr));
		if($cek->num_rows() > 0){
			$this->session->set_flashdata('alert', 'adauser');
			redirect('login/register');
		}
		elseif($cb != 'Y'){
			$this->session->set_flashdata('cek', '<small class="form-text text-muted">
			<p style="color: red; padding: 2px;">* Pilihan ini harus dicentang!</p></small>');
			redirect('login/register');
		}
		else{
			$this->session->set_flashdata('alert', 'pendaftaran');
			$this->Mcrud->insert('tbl_member',$dataInsert);
			redirect('login');
		}
	}

	public function recovery(){
		$this->template->load('layout_login','form_recovery');

	}

	public function recover_password(){
		$usr = $this->input->post('username');
		$qa = $this->input->post('qa');
		$data['user'] = $this->Mcrud->get_by_id('tbl_member',array('username' => $usr))->row_object();
		$cek = $this->Mcrud->get_by_id('tbl_member',array('username' => $usr));
		if($cek->num_rows() > 0){
			$cek1 = $this->Mcrud->get_by_id('tbl_member',array('username' => $usr, 'qa' => $qa));
			if($cek1->num_rows() > 0){
			$this->template->load('layout_login','password_recover',$data);
			}
			else{
				$this->session->set_flashdata('alert','ot');
				redirect('login/recovery');
			}
		}
		else{
			$this->session->set_flashdata('alert', 'usr');
			redirect('login/recovery');
		}
	}

	public function update_password(){
		$gid = $this->input->post('id');
		$id = $gid;
		$pass = $this->input->post('pass');
		$p1 = $this->input->post('pass1');
		$data['user'] = $this->Mcrud->get_by_id('tbl_member',array('idKonsumen' => $id))->row_object();
		if($pass != $p1){
			$this->session->set_flashdata('alert', 'xverif');
			$this->template->load('layout_login','password_recover',$data);
		}
		else{
			$dataUpdate = array('passwd' => $pass);
			$this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
			$this->session->set_flashdata('alert', 'pubah');
			redirect('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}