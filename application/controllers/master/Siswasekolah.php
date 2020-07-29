<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswasekolah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Msekolah');
		$this->load->model('master/Msiswasekolah');
	}
	// public function index()
	// {
	// 	$data = [
	// 		'title' => 'Data Golongan',
	// 		'page'  => 'Data Golongan',
	// 		'small' => 'List data Data Golongan',
	// 		'urls'  => '<li class="active">Data Golongan</li>',
	// 		'data'  => $this->Mgolongan->getall()
	// 	];
	// 	$this->template->display('master/gol/index', $data);//panggil dari view
	// }
	public function create()
	{
		$kode = $this->input->post('kode');
		$data['kode']=$kode;
		$data['data']=$this->Msekolah->getall();
		$this->load->view('master/Siswasekolah/create',$data);//panggil dari view
	}
		public function createAJX()
	{
		$kode = $this->input->post('kode');
		$data['kode']=$kode;
		$data['data']=$this->Msekolah->getall();
		$data['datasiswa']=$this->Msiswasekolah->jumlahsiswa($kode);
		$this->load->view('master/Siswasekolah/create_AJAX',$data);//panggil dari view
	}
	public function storeajx()
	{
		if ($this->input->is_ajax_request() == TRUE) {
			$A = $this->input->post('kode');
			echo "Berhasil esekusi___".$A;
		} else {
			exit('data tidak bisa dieksekusi');
		}
	}
	public function store()
	{
		if ($this->input->is_ajax_request() == TRUE) {
			$this->form_validation->set_rules('kode_sekolah', 'Kode Sekolah', 'required|is_unique[tb_golongan.kode_golongan]');
			$this->form_validation->set_rules('siswa', 'Siswa', 'required');
			$this->form_validation->set_rules('siswi', 'Siswi', 'required');
			$this->form_validation->set_rules('semester', 'Periode Semester ', 'required');
			$this->form_validation->set_rules('tahun', 'Periode Tahun', 'required');

			$this->form_validation->set_message('required', '%s tidak boleh kosong.');
			$this->form_validation->set_message('is_unique', '%s sudah digunakan.');
			if ($this->form_validation->run() == TRUE) {
				$params = $this->input->post(null, TRUE);
				$this->Msiswasekolah->update_and_insert($params);
				$json['status'] = true;
				$this->session->set_flashdata('pesan', sukses('Data Jumlah Siswa berhasil di Update.'));
			} else {
				$json['status'] = false;
				$json['pesan']  = $this->form_validation->error_array();
			}
			echo json_encode($json);
		} else {
			exit('data tidak bisa dieksekusi');
		}
	}
	// public function edit()
	// {
	// 	$kode = $this->input->post('kode');
	// 	$d['data'] = $this->Mgolongan->shows($kode);
	// 	$this->load->view('master/gol/edit', $d);//panggil dari view
	// }
	// public function update()
	// {
	// 	if ($this->input->is_ajax_request() == TRUE) {
	// 		$this->form_validation->set_rules('kode', 'Kode Golongan', 'required');
	// 		$this->form_validation->set_rules('namagolongan', 'Nama Golongan', 'required');
	// 		$this->form_validation->set_message('required', '%s tidak boleh kosong');
	// 		if ($this->form_validation->run() == TRUE) {
	// 			$params = $this->input->post(null, TRUE);
	// 			$this->Mgolongan->update($params);
	// 			$json['status'] = true;
	// 			$this->session->set_flashdata('pesan', sukses('Data Golongan berhasil diupdate.'));
	// 		} else {
	// 			$json['status'] = false;
	// 			$json['pesan']  = $this->form_validation->error_array();
	// 		}
	// 		echo json_encode($json);
	// 	} else {
	// 		exit('data tidak bisa dieksekusi');
	// 	}
	// }
	// public function destroy($kode)
	// {
	// 	if (!$this->Mgolongan->destroy($kode)) {
	// 		$this->session->set_flashdata('pesan', danger('Anda tidak bisa menghapus data Golongan.'));
	// 	} else {
	// 		$this->session->set_flashdata('pesan', sukses('Anda telah menghapus data Golongan.'));
	// 	}
	// 	redirect('gol');
	// }
}
