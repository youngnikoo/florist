<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman extends CI_Controller {

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
      $data['sbp'] = 'mm-active';
      $data['sbpr'] = '';
      $data['sbt'] = '';
      $data['sbu'] = '';
      $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
      $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
      $data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
      $kt = 'b.idKotaTujuan=kt.idKota';
      $kr = 'b.idKurir=kr.idKurir';
      $data['ongkir'] = $this->Mcrud->jointiga('tbl_biaya_kirim b','tbl_kota kt','tbl_kurir kr','b.idKotaTujuan=kt.idKota','b.idKurir=kr.idKurir')->result();
      $this->template->load('layout','admin/pengiriman_main', $data);
    }

    // ======================Manajemen Kota=================================================

    public function edit_kota($id){
      $data['sba'] = '';
      $data['sbp'] = 'mm-active';
      $data['sbpr'] = '';
      $data['sbt'] = '';
      $data['sbu'] = '';
      $dataWhere = array('idKota' => $id);
      $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
      $data['kota'] = $this->Mcrud->get_by_id('tbl_kota',$dataWhere)->row_object();
      $this->template->load('layout','admin/edit_kota',$data);
    }
    
    public function update_kota(){
      $id = $this->input->post('id');
      $namaKota = $this->input->post('namakota');
      $dataUpdate = array('namaKota' => $namaKota);
      $this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);
      if ($error['code'] != 0 ) {
        $this->session->set_flashdata('alert','gagalubah');
      }else{
        $this->session->set_flashdata('alert','diubah');
      }
      redirect('pengiriman');
    }

    public function simpan_kota(){
      $namaKota = $this->input->post('namaKota');
      $dataInsert = array('namaKota' => $namaKota);
      $cek = $this->Mcrud->get_by_id('tbl_kota', $dataInsert);

      if ($namaKota==NULL){
      $this->session->set_flashdata('alert','kosong');
      redirect('pengiriman');
      }else{
        if($cek->num_rows() == 1){
          $this->session->set_flashdata('alert','ada');
          redirect('pengiriman');
        }else{
          $this->session->set_flashdata('alert','ditambahkan');
          $this->Mcrud->insert('tbl_kota',$dataInsert);
          redirect('pengiriman');
        }
      }
    }

  public function delete_kota($id){
		$where = array('idKota' => $id);
		$this->Mcrud->deletekat($where,'tbl_kota');
		$error = $this->db->error();
		if ($error['code'] != 0 ) {
			$this->session->set_flashdata('alert','gagalhapus');
		}else{
			$this->session->set_flashdata('alert','dihapus');
		}
		redirect('pengiriman');
	}

  // =======================Manajemen Jasa Kirim============================

  public function simpan_kurir(){
		$namaKurir = $this->input->post('namaKurir');
		$dataInsert = array('namaKurir' => $namaKurir);
		$cek = $this->Mcrud->get_by_id('tbl_kurir', $dataInsert);

		if ($namaKurir==NULL){
			$this->session->set_flashdata('alert','kosong');
			redirect('pengiriman');
		}else{
			if($cek->num_rows() == 1){
				$this->session->set_flashdata('alert','ada');
                redirect('pengiriman');
			}else{
				$this->session->set_flashdata('alert','ditambahkan');
				$this->Mcrud->insert('tbl_kurir',$dataInsert);
				redirect('pengiriman');
			}
		}
	}

  public function edit_kurir($id){
    $data['sba'] = '';
    $data['sbp'] = 'mm-active';
    $data['sbpr'] = '';
    $data['sbt'] = '';
    $data['sbu'] = '';
		$dataWhere = array('idKurir' => $id);
    $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
    $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$data['kurir'] = $this->Mcrud->get_by_id('tbl_kurir',$dataWhere)->row_object();
		$this->template->load('layout','admin/edit_kurir',$data);
	}

  public function update_kurir(){
    $id = $this->input->post('id');
    $namaKurir = $this->input->post('namaKurir');
    $dataUpdate = array('namaKurir' => $namaKurir);
    $this->Mcrud->update('tbl_kurir', $dataUpdate, 'idKurir', $id);
    $error = $this->db->error();
    if ($error['code'] != 0 ) {
			$this->session->set_flashdata('alert','gagalubah');
		}else{
      $this->session->set_flashdata('alert','diubah');
      redirect('pengiriman');
    }
  }

  public function delete_kurir($id){
		$where = array('idKurir' => $id);
		$this->Mcrud->deletekat($where,'tbl_kurir');
		$error = $this->db->error();
		if ($error['code'] != 0 ) {
			$this->session->set_flashdata('alert','gagalhapus');
		}else{
			$this->session->set_flashdata('alert','dihapus');
		}
		redirect('pengiriman');
	}

  // ======================Manajemen Ongkir=========================

  public function simpan_ongkir(){
		$kurir = $this->input->post('kurir');
		$kota = $this->input->post('kota');
		$biaya = $this->input->post('biaya');
		$dataInsert = array('idKurir' => $kurir,
                        'idKotaTujuan' => $kota,
                        'biaya' => $biaya
                      );
    $cekkr = $this->Mcrud->get_by_id('tbl_kurir', array('idKurir' => $kurir))->row();
    $cekkt = $this->Mcrud->get_by_id('tbl_kota', array('idKota' => $kota))->row();
		$cek = $this->Mcrud->get_by_id('tbl_biaya_kirim', array('idKurir' => $kurir,'idKotaTujuan' => $kota));
      	
      	if($cek->num_rows() == 1){
      		$this->session->set_flashdata('alert','ada');
      		redirect('pengiriman');
      	}elseif($biaya == NULL){
	      			$this->session->set_flashdata('alert','kosong');
	      		redirect('pengiriman');
      	}else{
	      	$this->session->set_flashdata('alert','ditambahkan');
				  $this->Mcrud->insert('tbl_biaya_kirim',$dataInsert);
				  redirect('pengiriman');
      	}
  }

  public function edit_ongkir($id){
    $data['sba'] = '';
    $data['sbp'] = 'mm-active';
    $data['sbpr'] = '';
    $data['sbt'] = '';
    $data['sbu'] = '';
		$dataWhere = array('idBiayaKirim' => $id);
    $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$data['kurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result();
		$data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
		$data['ongkir'] = $this->Mcrud->get_by_id('tbl_biaya_kirim',$dataWhere)->row_object();
		$this->template->load('layout','admin/edit_ongkir',$data);
	}

  public function update_ongkir(){
    $id = $this->input->post('id');
    $ckota = $this->input->post('ckota');
		$kurir = $this->input->post('kurir');
		$kota = $this->input->post('kota');
		$biaya = $this->input->post('biaya');
		$dataUpdate = array('idKurir' => $kurir,
                        'idKotaTujuan' => $kota,
                        'biaya' => $biaya
                      );
    $cekkr = $this->Mcrud->get_by_id('tbl_kurir', array('idKurir' => $kurir))->row();
    $cekkt = $this->Mcrud->get_by_id('tbl_kota', array('idKota' => $kota))->row();
		$cek = $this->Mcrud->get_by_id('tbl_biaya_kirim', array('idKurir' => $kurir,'idKotaTujuan' => $kota));
      	
      	if($cek->num_rows() == 1 and $cek->row_object()->idKotaTujuan != $ckota){
      		$this->session->set_flashdata('alert','ada');
      		redirect('pengiriman');
      	}elseif($biaya == NULL){
	      			$this->session->set_flashdata('alert','kosong');
	      		redirect('pengiriman');
      	}else{
	      	$this->session->set_flashdata('alert','diubah');
				  $this->Mcrud->update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $id);
				  redirect('pengiriman');
      	}
  }

  public function delete_ongkir($id){
		$where = array('idBiayaKirim' => $id);
		$this->Mcrud->deletekat($where,'tbl_biaya_kirim');
		$this->session->set_flashdata('alert','dihapus');
		redirect('pengiriman');
	}

}