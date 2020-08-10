<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Pendidikan_Guru_Berdasarkan_Sekolah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Msekolah');
		$this->load->model('master/Mlapendik_Sekolah');
		
	}
	public function index()
	{
		$data = [
			'title' => 'LAPENDIK',
			'page'  => 'Laporan Data Pendidiakn Guru',
			'small' => 'Laporan Data Pendidiakn Guru Berdasarkan Sekolah',
			'urls'  => '<li class="active">Laporan Data Pendidiakn Guru Berdasarkan Sekolah</li>',
			'dsikola'=>$this->Msekolah->getall()

		];
		$this->template->display('master/lapendiksekolah/index',$data);//panggil dari view
	}
	public function tabel_kode()
	{
		 $a = $this->input->post('a');
		 echo "$a";
		 $data=[
			'data'  => $this->Mlapendik_Sekolah->tampildata_kode($a),
		];
		$this->load->view('master/lapendiksekolah/tabel',$data);

	}
	public function cetak()
	{
		$a = $this->uri->segment(4);
		 $data=[
			'data'  => $this->Mlapendik_Sekolah->tampildata_kode($a),
			'dsekolah'=>$this->Msekolah->shows($a)
		];
		$this->load->view('master/lapendiksekolah/cetak', $data);

	} 
	// public function cetak()
	// {
	// 	$data = [
	// 		'data'  => $this->Mlappegawai->tampildata()
	// 	];
	// 	$this->load->view('master/lappegawai/cetaklappegawai',$data);

	// }
	
	
}
