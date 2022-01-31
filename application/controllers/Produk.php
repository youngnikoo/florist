<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

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
      $data['sbpr'] = 'mm-active';
      $data['sbt'] = '';
      $data['sbu'] = '';
        $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
        $data['produk'] = $this->Mcrud->join('tbl_produk p','tbl_kategori k','k.idKat=p.idKat')->result();
        $this->template->load('layout','admin/produk_main',$data);
    }

    // public function tambah_produk(){
    //     $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
	// 	$this->template->load('layout','admin/tambah_produk',$data);
	// }

    public function simpan_produk() {
        $nama = $this->input->post('namabunga');
        $dcek = array('namaProduk' => $nama);
        $jns = $this->input->post('jenis');
        $stok = $this->input->post('stok');
        $hrg = $this->input->post('harga');
        $desk = $this->input->post('desc');
        $gmbr = $_FILES['foto'];
        $cek = $this->Mcrud->get_by_id('tbl_produk', $dcek);

        if( $cek->row_object() == 1 ){
            $this->session->set_flashdata('alert','ada');
                redirect('produk');
        } else {
            if($_FILES['foto']['name'] == null) {
                $gmbr = ' ';
            } else {
                $config['upload_path'] = './assets/img';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';
                $config['max_size'] = '2048';
                $config['remove_spaces'] = 'TRUE';
                $config['detect_mime'] = 'TRUE';
    
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('foto')) {
    
                    $this->session->set_flashdata('alert', 'upload');
                    redirect('produk');
                } else {
                    $gmbr = $this->upload->data('file_name');
                }
            }
            $data = array(
                'idKat' => $jns,
                'namaProduk' => $nama,
                'foto' => $gmbr,
                'deskripsiProduk' => $desk,
                'harga' => $hrg,
                'stok' => $stok
            );
    
            $this->session->set_flashdata('alert', 'ditambahkan');
            $this->Mcrud->insert('tbl_produk', $data);
            redirect('produk');
        }     
    }

    public function edit_produk($id){
      $data['sba'] = '';
      $data['sbp'] = '';
      $data['sbpr'] = 'mm-active';
      $data['sbt'] = '';
      $data['sbu'] = '';
		$dataWhere = array('idProduk' => $id);
    $data['jns'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$data['produk'] = $this->Mcrud->get_by_id('tbl_produk',$dataWhere)->row_object();
		$this->template->load('layout','admin/edit_produk',$data);
    }

    public function update_produk(){
		$id = $this->input->post('id');
		$nama = $this->input->post('namabunga');
        $jns = $this->input->post('jenis');
        $stok = $this->input->post('stok');
        $hrg = $this->input->post('harga');
        $desk = $this->input->post('desc');
		$dataUpdate = array(
                    'idKat' => $jns,
                    'namaProduk' => $nama,
                    'deskripsiProduk' => $desk,
                    'harga' => $hrg,
                    'stok' => $stok
                );
        $this->session->set_flashdata('alert', 'diubah');
        $this->Mcrud->update('tbl_produk', $dataUpdate, 'idProduk', $id);
        redirect('produk');
    }

    public function delete_produk($id){
		$where = array('idProduk' => $id);
		$this->Mcrud->deletekat($where,'tbl_produk');
		$error = $this->db->error();
		if ($error['code'] != 0 ) {
            $this->session->set_flashdata('alert','gagalhapus');
        }
        else{
            $this->session->set_flashdata('alert','dihapus');
        }
		redirect('produk');
	}
// ================================ Kontroler Kategori ==========================================

    public function simpan_jenis(){
		$namaKategori = $this->input->post('namaKategori');
		$dataInsert = array('namaKat' => $namaKategori);
		$cek = $this->Mcrud->get_by_id('tbl_kategori', $dataInsert);

		if ($namaKategori==NULL){
			$this->session->set_flashdata('alert','kosong');
			redirect('produk');
		}else{
			if($cek->num_rows() == 1){
				$this->session->set_flashdata('alert','ada');
                redirect('produk');
			}else{
				$this->session->set_flashdata('alert','ditambahkan');
				$this->Mcrud->insert('tbl_kategori',$dataInsert);
				redirect('produk#tab-eg14-1');
			}
		}
	}

  public function edit_jenis($id){
    $data['sba'] = '';
      $data['sbp'] = '';
      $data['sbpr'] = 'mm-active';
      $data['sbt'] = '';
      $data['sbu'] = '';
    $dataWhere = array('idKat' => $id);
    $data['kota'] = $this->Mcrud->get_all_data('tbl_kota')->result();
    $data['jns'] = $this->Mcrud->get_by_id('tbl_kategori',$dataWhere)->row_object();
    $this->template->load('layout','admin/edit_kategori',$data);
  }

  public function update_jenis(){
		$id = $this->input->post('id');
		$namaKategori = $this->input->post('jenis');
		$dataUpdate = array('namaKat' => $namaKategori);
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idKat', $id);
		$this->session->set_flashdata('alert','diubah');
		redirect('produk');
  }

    public function delete_jenis($id){
		$where = array('idKat' => $id);
		$this->Mcrud->deletekat($where,'tbl_kategori');
    $error = $this->db->error();
		if ($error['code'] != 0 ) {
            $this->session->set_flashdata('alert','gagalhapus');
        }
        else{
            $this->session->set_flashdata('alert','dihapus');
        }
		redirect('produk');
	}
}