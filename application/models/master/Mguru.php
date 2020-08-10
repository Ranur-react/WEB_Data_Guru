<?php
class Mguru extends CI_Model
{
	protected $tabel = 'tb_guru';
	public function getall()
	{
		$this->db->from($this->tabel);
		$this->db->join('tb_sekolah', 'kode_sekolah=kode_sekolah_guru');
		// $this->db->join('tb_golongan', 'kode_golongan=kode_golongan_guru');
		$this->db->join('tb_kepegawaian', 'kode_pegawai=kode_pegawai_guru');
		$this->db->join('tb_matapelajaran', 'kode_matapelajaran=kode_jenis_guru');
		return $this->db->get()->result_array();
		//return $this->db->get($this->tabel)->result_array();
	}
	public function store($params)
	{
		$data = [
			'nip_guru'   => $params['nip'],
			'nama_guru'   => $params['nama'],
			'tmp_lahir_guru'   => $params['tmplahir'],
			'tgl_lahir_guru'   => $params['tgllahir'],
			'alamat_guru'   => $params['alamat'],
			'telp_guru'   => $params['tlp'],
			'jenkel_guru'   => $params['jenkel'],
			'agama_guru'   => $params['agama'],
			'status_guru'   => $params['status'],
			'jabatan_guru'   => $params['jabatan'],
			'masa_jabatan_guru'   => $params['masajabatan'],
			// 'ren_pensiun_guru'   => $params['renpensiun'],
			// 'nip_lama_guru'   => $params['niplama'],
			'nama_diklat_guru'   => $params['namadiklat'],
			'thn_diklat_guru'   => $params['thndiklat'],
			'nama_diklat_guru2'   => $params['namadiklat2'],
			'thn_diklat_guru2'   => $params['thndiklat2'],
			'nama_diklat_guru3'   => $params['namadiklat3'],
			'thn_diklat_guru3'   => $params['thndiklat3'],

			'nama_diklat_guru4'   => $params['namadiklat4'],
			'nama_diklat_guru5'   => $params['namadiklat5'],
			'nama_diklat_guru6'   => $params['namadiklat6'],
			'nama_diklat_guru7'   => $params['namadiklat7'],
			'nama_diklat_guru8'   => $params['namadiklat8'],
			'nama_diklat_guru9'   => $params['namadiklat9'],
			'nama_diklat_guru10'   => $params['namadiklat10'],



			'thn_diklat_guru4'   => $params['thndiklat4'],
			'thn_diklat_guru5'   => $params['thndiklat5'],
			'thn_diklat_guru6'   => $params['thndiklat6'],
			'thn_diklat_guru7'   => $params['thndiklat7'],
			'thn_diklat_guru8'   => $params['thndiklat8'],
			'thn_diklat_guru9'   => $params['thndiklat9'],
			'thn_diklat_guru10'   => $params['thndiklat10'],


			'kode_sekolah_guru'   => $params['kodesekolah'],
			'kode_jenis_guru'   => $params['kodejenisguru'],
			'no_sk_guru'   => $params['nosk'],
			'kode_golongan_guru'   => $params['kodegolongan'],
			'kode_pegawai_guru'   => $params['kodekepegawaian'],

			'kode_pangkat_guru'   => $params['kodepangkat'],
			'pendidikan_terakhir'   => $params['pendidikan_terakhir'],
		];
		return $this->db->insert($this->tabel, $data);
	}
	public function shows($kode)
	{
		return $this->db->where('nip_guru', $kode)->get($this->tabel)->row_array();
	}
	public function update($params)
	{
		$kode = $params['kode'];
		$data = [
			'nama_guru'   => $params['nama'],
			'tmp_lahir_guru'   => $params['tmplahir'],
			'tgl_lahir_guru'   => $params['tgllahir'],
			'alamat_guru'   => $params['alamat'],
			'telp_guru'   => $params['tlp'],
			'jenkel_guru'   => $params['jenkel'],
			'agama_guru'   => $params['agama'],
			'status_guru'   => $params['status'],
			'jabatan_guru'   => $params['jabatan'],
			'masa_jabatan_guru'   => $params['masajabatan'],
			'nama_diklat_guru'   => $params['namadiklat'],
			'thn_diklat_guru'   => $params['thndiklat'],
			'nama_diklat_guru2'   => $params['namadiklat2'],
			'thn_diklat_guru2'   => $params['thndiklat2'],
			'nama_diklat_guru3'   => $params['namadiklat3'],
			'thn_diklat_guru3'   => $params['thndiklat3'],
			'kode_sekolah_guru'   => $params['kodesekolah'],
			'kode_jenis_guru'   => $params['kodejenisguru'],
			'no_sk_guru'   => $params['nosk'],
			'kode_golongan_guru'   => $params['kodegolongan'],
			'kode_pegawai_guru'   => $params['kodekepegawaian'],
			'kode_pangkat_guru'   => $params['kodepangkat'],
			'pendidikan_terakhir'   => $params['pendidikan_terakhir'],
		];
		return $this->db->where('nip_guru', $kode)->update($this->tabel, $data);
	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE nip_guru='$kode'");
	}
	public function agama()
	{
		$data = array(
			'Islam',
			'Kristen',
			'Katolik',
			'Hindu',
			'Buddha',
			'Kong Hucu',
			'Lainnya'
		);
		return $data;
	}
}
