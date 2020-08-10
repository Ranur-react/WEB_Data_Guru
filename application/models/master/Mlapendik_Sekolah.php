<?php
class Mlapendik_Sekolah extends CI_Model
{
	
		public function tampildata()
	{
	return $this->db->query("SELECT * FROM `tb_guru`
				JOIN `tb_pend_guru` ON `tb_pend_guru`.`nip_pend_guru`=`tb_guru`.`nip_guru`
				JOIN `tb_sekolah` ON `tb_sekolah`.`kode_sekolah` = `tb_guru`.`kode_sekolah_guru`;
				")->result_array();
	}
	public function tampildata_kode($a)
	{
		return $this->db->query("SELECT * FROM `tb_guru`
				JOIN `tb_pend_guru` ON `tb_pend_guru`.`nip_pend_guru`=`tb_guru`.`nip_guru`
				JOIN `tb_sekolah` ON `tb_sekolah`.`kode_sekolah` = `tb_guru`.`kode_sekolah_guru` WHERE kode_sekolah_guru='$a';
				")->result_array();

	}

	

	
}
?>