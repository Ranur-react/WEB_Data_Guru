<?php
class Msiswasekolah extends CI_Model
{
	protected $tabel = 'tb_siswasekolah';

	public function update_and_insert($params)
	{

		$id=$params['kode_sekolah']."-". $params['semester']."-".$params['tahun'];
		$data = [
			'kode_siswasekolah'   => $id,
			'sekolah_kode'   => $params['kode_sekolah'],
			'siswa'   => $params['siswa'],
			'siswi'   => $params['siswi'],
			'semester'   => $params['semester'],
			'tahun'   => $params['tahun'],

		];
		  $this->db->where('kode_siswasekolah',$id);
		   $q = $this->db->get($this->tabel);

		   if ( $q->num_rows() > 0 ) 
		   {
		      $this->db->where('kode_siswasekolah',$id);
		      $this->db->update($this->tabel,$data);
		   } else {
		      $this->db->set('kode_siswasekolah', $id);
		      $this->db->insert($this->tabel,$data);
		   }

	}
	public function jumlahsiswa($value)
	{
		return $this->db->query("SELECT * FROM `tb_siswasekolah` 
JOIN `tb_sekolah` ON `tb_sekolah`.`kode_sekolah`=`tb_siswasekolah`.`sekolah_kode`
WHERE `tb_siswasekolah`.`sekolah_kode`='$value';")->result_array();;
	}
}
