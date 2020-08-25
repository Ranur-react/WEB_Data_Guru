<?php
class Mlapstatuspegawailurah extends CI_Model
{
	
		public function tampildata()
	{
		return $this->db->query("SELECT * 
FROM tb_kepegawaian 
JOIN tb_guru ON
kode_pegawai=kode_pegawai_guru 
JOIN `tb_sekolah` ON `tb_guru`.`kode_sekolah_guru`=`tb_sekolah`.`kode_sekolah`
JOIN `tb_kelurahan` ON `tb_sekolah`.`kode_lurah_sekolah`=`tb_kelurahan`.`kode_lurah`
ORDER BY nip_guru ASC;")->result_array();
	}

	
	public function tampildata_kode($a,$b)
	{
				return $this->db->query("SELECT * 
FROM tb_kepegawaian 
JOIN tb_guru ON
kode_pegawai=kode_pegawai_guru 
JOIN `tb_sekolah` ON `tb_guru`.`kode_sekolah_guru`=`tb_sekolah`.`kode_sekolah`
JOIN `tb_kelurahan` ON `tb_sekolah`.`kode_lurah_sekolah`=`tb_kelurahan`.`kode_lurah`
WHERE status_pegawai LIKE '$a' AND  kode_lurah_sekolah LIKE '$b' 
ORDER BY nip_guru ASC;")->result_array();
	}

	
	
}
?>