<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<a href="<?= site_url('master/Lapguru/cetak') ?>" class="btn bg-aqua"><i class="fa fa-print">Cetak Laporan</i></a>
				<a href="<?= site_url('Home') ?>" class="btn bg-yellow"><i class="fa fa-backward">Kembali</i></a>

				<center><h2><b>Laporan Data Guru</b></h2></center>
				<center><h4><b>Kecamatan Padang Timur</b></h4></center>
				<center><h4><b>Kota Padang</b></h4></center>
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th>NIP Guru</th>
							<th>Nama Guru</th>
							<th>Alamat </th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>No Telpon</th>
							<th>Jenis Kelamin</th>
							<th>Status Kepegawaian</th>
							<th>Matapelajaran</th>
							<th>Jabatan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center" width="40px"><?= $no . '.'; ?></td>
								<td><?= $d['nip_guru'] ?></td>
								<td><?= $d['nama_guru'] ?></td>
								<td><?= $d['alamat_guru'] ?></td>
								<td><?= $d['tmp_lahir_guru'] ?></td>
								<td><?= $d['tgl_lahir_guru'] ?></td>
								<td><?= $d['telp_guru'] ?></td>
								<td><?= $d['jenkel_guru'] ?></td>
								<td><?= $d['status_pegawai'] ?></td>
								<td><?= $d['nama_matapelajaran'] ?></td>
								<td><?= $d['jabatan_guru'] ?></td>
								
									
								</td>
							</tr>
						<?php $no++;
						} ?>
						
					</tbody>
					<tfoot>
						
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

<div id="tampil_modal"></div>

