			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th>Kelurahan</th>
							<th>Nama Sekolah</th>
							<th>Nama Kepsek</th>
							<th>Alamat Sekolah</th>
							<th>Telp Sekolah</th>
							<th>Jumlah Guru Honorer</th>
							<th>Jumlah Guru PNS</th>
							<th>Jumlah Siswa Laki-Laki</th>
							<th>Jumlah Siswi Perempuan</th>
							<th>Nama Kelurahan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						$tothonor=0;
						$totpns=0;
						$totlk=0;
						$totpr=0;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center" width="40px"><?= $no . '.'; ?></td>
									<td><?= $d['nama_lurah'] ?></td>
								<td><?= $d['nama_sekolah'] ?></td>
								<td><?= $d['nama_kepsek'] ?></td>
								<td><?= $d['alamat_sekolah'] ?></td>
								<td><?= $d['telp_sekolah'] ?></td>
								<?php $dhonor=$this->Msekolah->hitunghonor($d['kode_sekolah']) ?>
								<?php $dpns=$this->Msekolah->hitungpns($d['kode_sekolah']) ?>
								<td><?php echo $dhonor['jumlahpns']; ?></td>
								<td><?php echo $dpns['jumlahpns']; ?></td>
								<td><?= $d['jml_siswa_lk'] ?></td>
								<td><?= $d['jml_siswa_pr'] ?></td>
								<td><?= $d['nama_lurah'] ?></td>
								
									
								</td>
							</tr>
						<?php $no++;
						$tothonor=$tothonor+$dhonor['jumlahpns'];
						$totpns=$totpns+$dpns['jumlahpns'];
						$totlk=$totlk+$d['jml_siswa_lk'];
						$totpr=$totpr+$d['jml_siswa_pr'];
						} ?>
						
					</tbody>
					<tfoot>
						<th>
							<td colspan="4" align="center">
								<b>Total</b> 
							</td>	
							<td>
								<b><?=  $tothonor ?></b>
							</td>
							<td>
								<b><?=  $totpns ?></b>
							</td>
							<td>
								<b><?=  $totlk ?></b>
							</td>
							<td>
								<b><?=  $totpr ?></b>
							</td>
						</th>
					</tfoot>
				</table>
			</div>