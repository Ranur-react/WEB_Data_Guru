<?php
class Mpendgr extends CI_Model
{
	protected $tabel = 'tb_pend_guru';
	public function getall()
	{
		$this->db->from($this->tabel);
		$this->db->join('tb_guru', 'nip_guru=nip_pend_guru');
		return $this->db->get()->result_array();
	}
	public function store($params)
	{
		$data = [
			'nip_pend_guru'   => $params['nippend'],
			'sma'   => $params['sma'],
			'smajurusan'   => $params['smajurusan'],
			'smatahunlulus'   => $params['smatahunlulus'],

			's1'   => $params['s1'],
			's1jurusan'   => $params['s1jurusan'],
			's1gelar'   => $params['s1gelar'],
			's1tahunlulus'   => $params['s1tahunlulus'],

			's2'   => $params['s2'],
			's2jurusan'   => $params['s2jurusan'],
			's2gelar'   => $params['s2gelar'],
			's2tahunlulus'   => $params['s2tahunlulus'],

			'Lainnya'   => $params['Lainnya'],
			'Lainnyajurusan'   => $params['Lainnyajurusan'],
			'Lainnyagelar'   => $params['Lainnyagelar'],
			'Lainnyatahunlulus'   => $params['Lainnyatahunlulus'],
		];
		return $this->db->insert($this->tabel, $data);
	}
	public function shows($kode)
	{
		return $this->db->where('nip_pend_guru', $kode)->get($this->tabel)->row_array();
	}
	public function update($params)
	{
		$kode = $params['kode'];
		$data = [
			'sma'   => $params['sma'],
			'smajurusan'   => $params['smajurusan'],
			'smatahunlulus'   => $params['smatahunlulus'],

			's1'   => $params['s1'],
			's1jurusan'   => $params['s1jurusan'],
			's1gelar'   => $params['s1gelar'],
			's1tahunlulus'   => $params['s1tahunlulus'],

			's2'   => $params['s2'],
			's2jurusan'   => $params['s2jurusan'],
			's2gelar'   => $params['s2gelar'],
			's2tahunlulus'   => $params['s2tahunlulus'],

			'Lainnya'   => $params['Lainnya'],
			'Lainnyajurusan'   => $params['Lainnyajurusan'],
			'Lainnyagelar'   => $params['Lainnyagelar'],
			'Lainnyatahunlulus'   => $params['Lainnyatahunlulus'],
		];
		return $this->db->where('nip_pend_guru', $kode)->update($this->tabel, $data);
	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE nip_pend_guru='$kode'");
	}
}
