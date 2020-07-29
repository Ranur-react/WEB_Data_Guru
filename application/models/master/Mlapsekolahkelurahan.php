<?php
class Mlapsekolahkelurahan extends CI_Model
{
	
		public function tampildata()
	{
		return $this->db->query("SELECT *, SUM(`tb_siswasekolah`.`siswa`) AS jml_siswa_lk,
					SUM(`tb_siswasekolah`.`siswi`) AS jml_siswa_pr, 
					`tb_kelurahan`.`nama_lurah`
					FROM `tb_siswasekolah`
					JOIN `tb_sekolah` ON tb_siswasekolah.`sekolah_kode`=`tb_sekolah`.`kode_sekolah` 
					JOIN `tb_kelurahan` ON tb_sekolah.`kode_lurah_sekolah`=`tb_kelurahan`.`kode_lurah` 
					GROUP BY kode_sekolah;")->result_array();
	}
		public function tampildata_kode($a,$b)
	{
		return $this->db->query("SELECT *, SUM(`tb_siswasekolah`.`siswa`) AS jml_siswa_lk,
					SUM(`tb_siswasekolah`.`siswi`) AS jml_siswa_pr, 
					`tb_kelurahan`.`nama_lurah`
					FROM `tb_siswasekolah`
					JOIN `tb_sekolah` ON tb_siswasekolah.`sekolah_kode`=`tb_sekolah`.`kode_sekolah` 
					JOIN `tb_kelurahan` ON tb_sekolah.`kode_lurah_sekolah`=`tb_kelurahan`.`kode_lurah` WHERE `tb_siswasekolah`.`sekolah_kode`='$a' AND tb_sekolah.`kode_lurah_sekolah`='$b'
					GROUP BY kode_sekolah;")->result_array();
	}


	
	
}
?>