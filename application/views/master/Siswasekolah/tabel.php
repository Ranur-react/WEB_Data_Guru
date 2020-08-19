				<table class="table table-bordered table-striped data-tabel">
					<thead>
						<tr class="text-center">
							<th>Semester</th>
							<th>Tahun</th>
							<th>Jumlah Siswa</th>
							<th>Jumlah Siswi</th>
							<th>Total </th>
						</tr>
					</thead>
					<tbody>
						<?php
								// $datasiswaX=$this->Msiswasekolah->jumlahsiswa($kode);
// echo "$tesbanakoa";
						 $no = 1;
						foreach ($datasiswa as $d) { ?>
							<tr >
								<td>Semester <?= $d['semester'] ?></td>
								<td class="text-center"><?= $d['tahun'] ?></td>
								<td class="text-center"><?= $d['siswa'] ?></td>
								<td class="text-center"><?= $d['siswi'] ?></td>
								<td class="text-center"><?= $d['siswi']+$d['siswa']  ?></td>

							</tr>
						<?php $no++;
						} ?>
						
					</tbody>
				</table>