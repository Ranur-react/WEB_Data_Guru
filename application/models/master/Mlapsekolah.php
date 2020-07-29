<?php
class Mlapsekolah extends CI_Model
{
	protected $tabel = 'tb_sekolah';
	public function tampildata_kode($a,$b)
	{


			return $this->db->query("SELECT *, SUM(`tb_siswasekolah`.`siswa`) AS jml_siswa_lk,
					SUM(`tb_siswasekolah`.`siswi`) AS jml_siswa_pr, 
					`tb_kelurahan`.`nama_lurah`
					FROM `tb_siswasekolah`
					JOIN `tb_sekolah` ON tb_siswasekolah.`sekolah_kode`=`tb_sekolah`.`kode_sekolah` 
					JOIN `tb_kelurahan` ON tb_sekolah.`kode_lurah_sekolah`=`tb_kelurahan`.`kode_lurah` WHERE `tb_siswasekolah`.`semester`='$a' AND `tb_siswasekolah`.`tahun`='$b'
					GROUP BY kode_sekolah;")->result_array();
		
	}
		public function getall()
	{
// 		return $this->db->query("SELECT * ,`tb_kelurahan`.`nama_lurah` FROM tb_sekolah
// JOIN `tb_kelurahan` ON
// `tb_kelurahan`.`kode_lurah`=`tb_sekolah`.`kode_lurah_sekolah`
// ;")->result_array();

return $this->db->query("SELECT *,
					SUM(`tb_siswasekolah`.`siswa`) AS jml_siswa_lk,
					SUM(`tb_siswasekolah`.`siswi`) AS jml_siswa_pr, 
					`tb_kelurahan`.`nama_lurah`
					FROM `tb_siswasekolah`
					JOIN `tb_sekolah` ON tb_siswasekolah.`sekolah_kode`=`tb_sekolah`.`kode_sekolah` 
					JOIN `tb_kelurahan` ON tb_sekolah.`kode_lurah_sekolah`=`tb_kelurahan`.`kode_lurah` 
					GROUP BY kode_sekolah;")->result_array();
		
	}
	public function store($params)
	{
		$data = [
			'kode_sekolah'   => $params['kode'],
			'nama_sekolah'   => $params['nama'],
			'alamat_sekolah'   => $params['alamat'],
			'telp_sekolah'   => $params['telp'],
			'jml_guru_honor'   => $params['jmlhonor'],
			'jml_guru_pns'   => $params['jmlpns'],
			'jml_siswa_lk'   => $params['jmllk'],
			'jml_siswa_pr'   => $params['jmlpr'],
			'kode_lurah_sekolah'   => $params['kodelurah'],
		];
		return $this->db->insert($this->tabel, $data);
	}
	public function shows($kode)
	{
		return $this->db->where('kode_sekolah', $kode)->get($this->tabel)->row_array();
	}
	
	
}
