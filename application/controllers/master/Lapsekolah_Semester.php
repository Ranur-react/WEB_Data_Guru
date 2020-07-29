<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapsekolah_Semester extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Mlapsekolah');
		$this->load->model('master/Msekolah');
	}

	public function index()
	{
		$data = [
			'title' => 'Laporan Data Sekolah Per Semester',
			'page'  => 'Laporan Data Sekolah Per Semester',
			'small' => 'List Laporan Data Sekolah Per Semester',
			'urls'  => '<li class="active">Laporan Data Sekolah Per Semester</li>',
			// 'data'  => $this->Mlapsekolah->getall()
		];
		$this->template->display('master/lapsikola_Semester/index', $data);//panggil dari view
	}
	public function tabel()
	{
		
		$data=[
			'data'  => $this->Mlapsekolah->getall()
		];
		$this->load->view('master/lapsikola_Semester/tabel', $data);
		
		
	}
	public function tabel_kode()
	{
		 $a = $this->input->post('a');
		  $b = $this->input->post('b');
		$data=[
			'data'  => $this->Mlapsekolah->tampildata_kode($a,$b)			
		];
		$this->load->view('master/lapsikola_Semester/tabel', $data);

		

	}

public function cetak()
	{
echo		$a = $this->uri->segment(4);
echo		$b =$this->uri->segment(5);
		$data=[
			'Semester'  =>$a,			
			'Tahun'  => $b,			
			'data'  => $this->Mlapsekolah->tampildata_kode($a,$b)			
		];
		$this->load->view('master/lapsikola_Semester/cetaklapsikola',$data);

		

	}

	// public function cetak()
	// {
	// 	$data = [
	// 		'data'  => $this->Mlapsekolah->getall()
	// 	];
	// 	$this->load->view('master/lapsikola_Semester/cetaklapsikola',$data);

	// }
	
	
}
