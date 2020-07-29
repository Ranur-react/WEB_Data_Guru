<?php
class Mlapgollurah extends CI_Model
{
	
		public function tampildata()
	{
		return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat, pangkat_kode_golongan
FROM tb_guru 
JOIN `tb_golongan` ON `tb_golongan`.`kode_golongan`=`tb_guru`.`kode_golongan_guru`
JOIN `tb_pangkat` ON `tb_pangkat`.`kode_pangkat`=`tb_guru`.`kode_pangkat_guru` 
JOIN `tb_sekolah` ON `tb_sekolah`.`kode_sekolah`=`tb_guru`.`kode_sekolah_guru`
JOIN `tb_kelurahan` ON `tb_kelurahan`.`kode_lurah`=`tb_sekolah`.`kode_lurah_sekolah`
ORDER BY nip_guru ASC")->result_array();
	}

public function tampildata_kode($a,$b)
{

return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat, pangkat_kode_golongan
FROM tb_guru 
JOIN `tb_golongan` ON `tb_golongan`.`kode_golongan`=`tb_guru`.`kode_golongan_guru`
JOIN `tb_pangkat` ON `tb_pangkat`.`kode_pangkat`=`tb_guru`.`kode_pangkat_guru` 
JOIN `tb_sekolah` ON `tb_sekolah`.`kode_sekolah`=`tb_guru`.`kode_sekolah_guru`
JOIN `tb_kelurahan` ON `tb_kelurahan`.`kode_lurah`=`tb_sekolah`.`kode_lurah_sekolah`
WHERE `tb_golongan`.`kode_golongan` LIKE '$b' AND `tb_kelurahan`.`kode_lurah` LIKE '$a'
ORDER BY nip_guru ASC")->result_array();


	
}

	
	
}
?>