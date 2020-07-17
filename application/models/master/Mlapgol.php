<?php
class Mlapgol extends CI_Model
{
		public function tampildata()
	{
		return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat,nama_golongan FROM tb_guru JOIN tb_golongan ON
kode_golongan_guru=kode_golongan JOIN tb_pangkat ON kode_golongan=pangkat_kode_golongan ORDER BY nip_guru ASC")->result_array();
	}

	


	
	
}
?>