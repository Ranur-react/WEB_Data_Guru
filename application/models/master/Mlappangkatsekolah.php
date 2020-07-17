<?php
class Mlappangkatsekolah extends CI_Model
{
	
		public function tampildata()
	{
		return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat,nama_golongan FROM tb_golongan JOIN tb_guru
ON kode_golongan=kode_golongan_guru JOIN tb_pangkat ON kode_golongan=pangkat_kode_golongan ORDER BY nip_guru ASC")->result_array();
	}

	


		public function tampildata_kode($a,$b)
	{
		return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat,nama_golongan,kode_golongan
FROM tb_guru
JOIN tb_golongan 
ON kode_golongan=kode_golongan_guru JOIN tb_pangkat ON kode_golongan=pangkat_kode_golongan
WHERE kode_golongan LIKE '$b' AND kode_sekolah_guru LIKE '$a'
ORDER BY nip_guru ASC;")->result_array();
	}
	
}
?>