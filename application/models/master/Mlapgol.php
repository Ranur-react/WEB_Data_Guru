<?php
class Mlapgol extends CI_Model
{
		public function tampildata()
	{
		return $this->db->query("SELECT *,tb_pangkat.`pangkat_kode_golongan` FROM tb_guru 
JOIN `tb_golongan` 
ON
`tb_golongan`.`kode_golongan`=`tb_guru`.`kode_golongan_guru`
JOIN `tb_pangkat`
ON `tb_pangkat`.`kode_pangkat`=`tb_guru`.`kode_pangkat_guru` 
ORDER BY nip_guru ASC;")->result_array();
	}

	


	
	
}
?>