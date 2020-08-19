<?php
class Msekolah extends CI_Model
{
	protected $tabel = 'tb_sekolah';
	public function getall()
	{
		// $this->db->from($this->tabel);
		// $this->db->join('tb_kelurahan', 'kode_lurah=kode_lurah_sekolah');
		// return $this->db->get()->result_array();
		// //return $this->db->get($this->tabel)->result_array();

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
			'kode_lurah_sekolah'   => $params['kodelurah'],	
			'nama_kepsek'   => $params['nama_kepsek'],	

		];


		$datakosong['kode_siswasekolah']= $params['kode']."I"."2000";
		$datakosong['sekolah_kode']= $params['kode'];
		$datakosong['siswa']=0;
		$datakosong['siswi']=0;
		$datakosong['semester']="I";
		$datakosong['tahun']=date("Y");
		$this->db->insert('tb_siswasekolah', $datakosong);
		
		return $this->db->insert($this->tabel, $data);
	}
	public function shows($kode)
	{
		return $this->db->where('kode_sekolah', $kode)->get($this->tabel)->row_array();
	}

		public function hitungpns($pm)
	{
		return $this->db->query("SELECT COUNT(`tb_guru`.`nip_guru`) as jumlahpns FROM `tb_guru` WHERE `tb_guru`.`kode_pegawai_guru`='PG-01' AND `tb_guru`.`kode_sekolah_guru`='$pm';")->row_array();
	}

	public function hitunghonor($pm)
	{
		return $this->db->query("SELECT COUNT(`tb_guru`.`nip_guru`) as jumlahpns FROM `tb_guru` WHERE `tb_guru`.`kode_pegawai_guru`='PG-02' AND `tb_guru`.`kode_sekolah_guru`='$pm';")->row_array();
	}


	public function update($params)
	{
		$kode = $params['kode'];
				$data = [
			'kode_sekolah'   => $params['kode'],
			'nama_sekolah'   => $params['nama'],
			'alamat_sekolah'   => $params['alamat'],
			'telp_sekolah'   => $params['telp'],
			'kode_lurah_sekolah'   => $params['kodelurah'],	
			'nama_kepsek'   => $params['nama_kepsek'],	

		];
		return $this->db->where('kode_sekolah', $kode)->update($this->tabel, $data);
	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE kode_sekolah='$kode'");
	}
}
