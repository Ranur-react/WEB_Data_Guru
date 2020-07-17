<?php
class Mpangkat extends CI_Model
{
	protected $tabel = 'tb_pangkat';
	public function getall()
	{
		return $this->db->get($this->tabel)->result_array();
		// $this->db->from($this->tabel);
		// $this->db->join('tb_golongan', 'kode_golongan=pangkat_kode_golongan');
		// return $this->db->get()->result_array();
	}
	public function store($params)
	{
		$data = [
			'kode_pangkat'   => $params['kodepangkat'],
			'pangkat_kode_golongan'   => $params['kodegolongan'],
		];
		return $this->db->insert($this->tabel, $data);
	}
	public function shows($kode)
	{
		return $this->db->where('kode_pangkat', $kode)->get($this->tabel)->row_array();
	}
	public function update($params)
	{
		$kode = $params['kode'];
		$data = [
			'kode_pangkat'   => $params['kodepangkat'],
			'pangkat_kode_golongan'   => $params['kodegolongan'],
		];
		return $this->db->where('kode_pangkat', $kode)->update($this->tabel, $data);
	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE kode_pangkat='$kode'");
	}
}
