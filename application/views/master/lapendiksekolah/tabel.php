				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th>NIP Guruu</th>
							<th>Nama Guru</th>
							<th>Asal SMK/SMA </th>
							<th>SMK/SMA Jurusan</th>
							<th>Tahun</th>
							<th>Pendidikan S1</th>
							<th>Gelar</th>
							<th>Tahun</th>
							<th>Pendidikan S2</th>
							<th>Gelar</th>
							<th>Tahun</th>
							<th>Lainnya</th>
							
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center" width="40px"><?= $no . '.'; ?></td>
								<td><?= $d['nip_guru'] ?></td>
								<td><?= $d['nama_guru'] ?></td>
								<td><?= $d['sma'] ?></td>
								<td><?= $d['smajurusan'] ?></td>
								<td><?= $d['smatahunlulus'] ?></td>
								<td><?= $d['s1']."-".$d['s1jurusan'] ?></td>
								<td><?= $d['s1gelar'] ?></td>
								<td><?= $d['s1tahunlulus'] ?></td>
								<td><?= $d['s2']."-".$d['s2jurusan'] ?></td>
								<td><?= $d['s2gelar'] ?></td>
								<td><?= $d['s2tahunlulus'] ?></td>
								<td><?= $d['lainnyagelar']."-".$d['Lainnyatahunlulus'] ?></td>
								
									
								</td>
							</tr>
						<?php $no++;
						} ?>
						
					</tbody>
					<tfoot>
					</tfoot>
				</table>