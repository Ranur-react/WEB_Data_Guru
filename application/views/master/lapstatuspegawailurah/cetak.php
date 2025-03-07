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
	<h1 align="center">Laporan Data berdasarkan Status Kepegawaian per Kelurahan
		 <br>Kecamatan Padang Timur</h1>
	<h3 align="center">Kota Padang</h3>
<table class="tit1" align="center" width="60%" border="0">
	<tr>
		<td width="20%">Kode/Nama Kelurahan</td>
		<td align="right" width="20%">: <?= $dlurah['kode_lurah']; ?>-<?= $dlurah['nama_lurah']; ?></td>
		<td align="right" width="60%"> </td>
	</tr>
		<tr>
		<td width="20%">Status Kepegawaian</td>
		<td align="right" width="20%">: <?= $a; ?></td>
		<td align="right" width="60%"> </td>
	</tr>
</table>
<table align="center" width="60%" border="1">
	<thead>
		<tr>
			<th  width="5%">No.</th>
			<th width="20%">NIP Guru</th>
			<th width="20%">Nama Guru</th>
			<!-- <th width="15%">Kode Kepegawaian</th> -->
			<th width="15%">Status Kepegawaian</th>
			<th width="15%">No SK</th>
			<th width="20%">Nama Diklat</th>
			<th width="20%">Tahun Diklat</th>
			
			
		</tr>
	</thead>
	<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td width="40px"><?= $no . '.'; ?></td>
								<td><?= $d['nip_guru'] ?></td>
								<td><?= $d['nama_guru'] ?></td>
								<!-- <td><?= $d['kode_pegawai'] ?></td> -->
								<td><?= $d['status_pegawai'] ?></td>
								<td><?= $d['no_sk_guru'] ?></td>
								<td><?= 
										$d['nama_diklat_guru']. " | ".
										$d['nama_diklat_guru2']. " | ".
										$d['nama_diklat_guru3']. " | ".
										$d['nama_diklat_guru4']. " | ".
										$d['nama_diklat_guru5']. " | ".
										$d['nama_diklat_guru6']. " | ".
										$d['nama_diklat_guru7']. " | ".
										$d['nama_diklat_guru8']. " | ".
										$d['nama_diklat_guru9']. " | ".
										$d['nama_diklat_guru10']. " | "

										 ?></td>
								<td><?= 
								$d['thn_diklat_guru']. " | ".
								$d['thn_diklat_guru2']. " | ".
								$d['thn_diklat_guru3']. " | ".
								$d['thn_diklat_guru4']. " | ".
								$d['thn_diklat_guru5']. " | ".
								$d['thn_diklat_guru6']. " | ".
								$d['thn_diklat_guru7']. " | ".
								$d['thn_diklat_guru8']. " | ".
								$d['thn_diklat_guru9']. " | ".
								$d['thn_diklat_guru10']. " | "
								 ?></td>
								
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