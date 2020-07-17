<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapstatuspegawailurah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Mlapstatuspegawailurah');
		$this->load->model('master/Mkepegawaian');
		$this->load->model('master/Mkelurahan');
	}

	public function index()
	{
		
		$data = [
			'title' => 'Laporan Data berdasarkan Status Kepegawaian per Kelurahan',
			'page'  => 'Laporan Data berdasarkan Status Kepegawaian per Kelurahan',
			'small' => 'List Laporan Data berdasarkan Status Kepegawaian per Kelurahan',
			'urls'  => '<li class="active">Laporan Data berdasarkan Status Kepegawaian per Kelurahan</li>',
			'data'  => $this->Mlapstatuspegawailurah->tampildata(),
			'dpegawai'=>$this->Mkepegawaian->getall(),
			'dlurah'=>$this->Mkelurahan->getall()
		];
		$this->template->display('master/Lapstatuspegawailurah/index', $data);//panggil dari view
	}

	public function tabel()
	{
		
		$data=[
			'data'  => $this->Mlapstatuspegawailurah->tampildata(),
		];
		$this->load->view('master/Lapstatuspegawailurah/tabel', $data);
		
	}
	public function tabel_kode()
	{
		 $a = $this->input->post('a');
		  $b = $this->input->post('b');
		$data=[
			'data'  => $this->Mlapstatuspegawailurah->tampildata_kode($a,$b),
		];
		$this->load->view('master/Lapstatuspegawailurah/tabel', $data);

	}

public function cetak()
	{
		$a = $this->uri->segment(4);
		$b = $this->uri->segment(5);
		$data=[
			'data'  => $this->Mlapstatuspegawailurah->tampildata_kode($a,$b),
			'dlurah'=>$this->Mkelurahan->shows($b),
			'a'=>$a
		];
		$this->load->view('master/Lapstatuspegawailurah/cetak',$data);

	}


	
	
}
