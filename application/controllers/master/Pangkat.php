<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pangkat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Mpangkat');
		$this->load->model('master/Mgolongan');
	}
	public function index()
	{
		$data = [
			'title' => 'Data Pangkat',
			'page'  => 'Data Pangkat',
			'small' => 'List  Data Pangkat',
			'urls'  => '<li class="active">Data Pangkat</li>',
			'data'  => $this->Mpangkat->getall()
		];
		$this->template->display('master/pangkat/index', $data);//panggil dari view
	}
	public function create()
	{
		$d['dgolongan'] = $this->Mgolongan->getall();
		$this->load->view('master/pangkat/create',$d);//panggil dari view
	}
	public function store()
	{
		if ($this->input->is_ajax_request() == TRUE) {
			$this->form_validation->set_rules('kodepangkat', 'Kode Pangkat', 'required|is_unique[tb_pangkat.kode_pangkat]');
			$this->form_validation->set_rules('kodegolongan', 'Kode Golongan', 'required');
			$this->form_validation->set_message('required', '%s tidak boleh kosong.');
			$this->form_validation->set_message('is_unique', '%s sudah digunakan.');
			if ($this->form_validation->run() == TRUE) {
				$params = $this->input->post(null, TRUE);
				$this->Mpangkat->store($params);
				$json['status'] = true;
				$this->session->set_flashdata('pesan', sukses('Data Pangkat berhasil tersimpan.'));
			} else {
				$json['status'] = false;
				$json['pesan']  = $this->form_validation->error_array();
			}
			echo json_encode($json);
		} else {
			exit('data tidak bisa dieksekusi');
		}
	}
	public function edit()
	{
		$kode = $this->input->post('kode');
		$d['dgolongan'] = $this->Mgolongan->getall();
		$d['data'] = $this->Mpangkat->shows($kode);
		$this->load->view('master/pangkat/edit', $d);//panggil dari view
	}
	public function update()
	{
		if ($this->input->is_ajax_request() == TRUE) {
			$this->form_validation->set_rules('kodepangkat', 'Kode Pangkat', 'required');
			$this->form_validation->set_rules('kodegolongan', 'Kode Golongan', 'required');
			$this->form_validation->set_message('required', '%s tidak boleh kosong');
			if ($this->form_validation->run() == TRUE) {
				$params = $this->input->post(null, TRUE);
				$this->Mpangkat->update($params);
				$json['status'] = true;
				$this->session->set_flashdata('pesan', sukses('Data Pangkat berhasil diupdate.'));
			} else {
				$json['status'] = false;
				$json['pesan']  = $this->form_validation->error_array();
			}
			echo json_encode($json);
		} else {
			exit('data tidak bisa dieksekusi');
		}
	}
	public function destroy($kode)
	{
		if (!$this->Mpangkat->destroy($kode)) {
			$this->session->set_flashdata('pesan', danger('Anda tidak bisa menghapus data Pangkat.'));
		} else {
			$this->session->set_flashdata('pesan', sukses('Anda telah menghapus data pangkat'));
		}
		redirect('pangkat');
	}
}
