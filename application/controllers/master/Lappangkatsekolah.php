<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lappangkatsekolah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Mlappangkatsekolah');
		$this->load->model('master/Mpangkat');
		$this->load->model('master/Msekolah');
	}
	public function index()
	{
		
		$data = [
			'title' => 'Laporan Data berdasarkan Pangkat per Sekolah',
			'page'  => 'Laporan Data berdasarkan Pangkat per Sekolah',
			'small' => 'List Laporan Data berdasarkan Pangkat per Sekolah',
			'urls'  => '<li class="active">Laporan Data berdasarkan Pangkat per Sekolah</li>',
			'data'  => $this->Mlappangkatsekolah->tampildata(),
			'dpangkat'=>$this->Mpangkat->getall(),
			'dsikola'=>$this->Msekolah->getall()
		];
		$this->template->display('master/lappangkatsekolah/index', $data);//panggil dari view
	}
	
	public function tabel_kode()
		{
			$a = $this->input->post('a');
			$b = $this->input->post('b');
			$data=[
				'data'  => $this->Mlappangkatsekolah->tampildata_kode($a,$b),
				'dpangkat'=>$this->Mpangkat->getall(),
				'dsikola'=>$this->Msekolah->getall()
			];
			$this->load->view('master/lappangkatsekolah/tabel', $data);

		}
	public function tabel()
		{
			
			$data=[
				'data'  => $this->Mlappangkatsekolah->tampildata(),
				'dpangkat'=>$this->Mpangkat->getall(),
				'dsikola'=>$this->Msekolah->getall()
			];
			$this->load->view('master/lappangkatsekolah/tabel', $data);
			
		}
	public function cetak()
		{
			$a = $this->uri->segment(4);
			$b =$this->uri->segment(5);
			$data=[
				'data'  => $this->Mlappangkatsekolah->tampildata_kode($a,$b),
				'dpangkat'=>$this->Mpangkat->shows($b),
				'dsikola'=>$this->Msekolah->shows($a)
			];
			$this->load->view('master/lappangkatsekolah/cetak',$data);

		}
}
