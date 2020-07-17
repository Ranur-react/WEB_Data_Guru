<?php
class Mlappangkat extends CI_Model
{
	
		public function tampildata()
	{
		return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat,nama_golongan FROM tb_golongan JOIN tb_guru
ON kode_golongan=kode_golongan_guru JOIN tb_pangkat ON kode_golongan=pangkat_kode_golongan ORDER BY nip_guru ASC")->result_array();
	}

	public function tampildata_kode($a)
	{
		return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat,nama_golongan FROM tb_golongan JOIN tb_guru
ON kode_golongan=kode_golongan_guru JOIN tb_pangkat ON kode_golongan=pangkat_kode_golongan
WHERE kode_golongan LIKE '$a' 
ORDER BY nip_guru ASC")->result_array();
	}


	

	
}
?>