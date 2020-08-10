<?php //ob_start(); ?>
<!DOCTYPE html>

<html>
<head>
	<title>Laporan </title>
	<style>

 table {border-collapse:collapse; table-layout:fixed;}
 table td {word-wrap:break-word;text-align: left;}

 </style>
</head>
<body onload="window.print()">
	<h1 align="center">Laporan Data Pendidikan Guru Berdasarkan Sekolah
		 <br>Kecamatan Padang Timur</h1>
	<h3 align="center">Kota Padang</h3>
	<table align="center" width="60%" border="0">
	<tr>
		<td width="20%">Kode/Nama Sekolah</td>
		<td align="right" width="20%">: <?= $dsekolah['kode_sekolah']; ?>-<?= $dsekolah['nama_sekolah']; ?></td>
		<td align="right" width="60%"> </td>
	</tr>
	<!-- 	<tr>
		<td width="20%">Status Pangkat</td>
		<td align="right" width="20%">: <?= $a; ?></td>
		<td align="right" width="60%"> </td>
	</tr> -->
</table>
<table align="center" width="60%" border="1">
	<thead>
		<tr>
							<th width="5%" class="text-center">No.</th>
							<th width="10%">NIP Guru</th>
							<th width="15%">Nama Guru</th>
							<th width="15%">Asal SMK/SMA </th>
							<th width="15%">SMK/SMA Jurusan</th>
							<th width="10%">Tahun</th>
							<th width="15%">Pendidikan S1</th>
							<th width="10%">Gelar</th>
							<th width="10%">Tahun</th>
							<th width="15%">Pendidikan S2</th>
							<th width="10%">Gelar</th>
							<th width="10%">Tahun</th>
							<th width="15%">Lainnya</th>


			
			
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
								
									
								</td>
							</tr>
						<?php $no++;
						
						} ?>
						
					</tbody>
	<tfoot>
						
					</tfoot>
</table>
<center><br>Padang,
<?php echo date('d-M-yy') ?>
<br><br><br><br>
<u>(......................................)</u><br>
<b>Ketua Pengurus</b></center>
</body>
</html>
<?php
// $html = ob_get_contents();
// ob_end_clean();
// require_once('html2pdf/html2pdf.class.php');
// $pdf = new HTML2PDF('P','A4','en');
// $pdf->WriteHTML($html);
// $pdf->Output('Laporan File.pdf', 'D');
?>