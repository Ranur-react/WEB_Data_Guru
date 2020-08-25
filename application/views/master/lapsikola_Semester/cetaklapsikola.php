<?php //ob_start(); ?>
<!DOCTYPE html>

<html>
<head>
	<title>Laporan </title>
	<style>

 table {border-collapse:collapse; table-layout:fixed;}
 table td {word-wrap:break-word;text-align: center;}

 </style>
</head>
<body onload="window.print()">
	<h1 align="center">Laporan Data Sekolah
		 <br>Kecamatan Padang Timur</h1>
	<h3 align="center">Kota Padang</h3>
	<table align="center" width="60%" border="0">
	<tr>
		<td width="20%">Semester</td>
		<td align="right" width="20%">: Semester <?= $Semester; ?></td>
		<td align="right" width="60%"> </td>
	</tr>
		<tr>
		<td width="20%">Tahun</td>
		<td align="right" width="20%">: <?= $Tahun; ?></td>
		<td align="right" width="60%"> </td>
	</tr>
</table>
<table align="center" width="60%" border="1">
	<thead>
		<tr>
			<th  width="5%">No.</th>
			<th width="20%">Nama Sekolah</th>
			<th width="15%">Nama Kepsek</th>
			<th width="20%">Alamat Sekolah</th>
			<th width="15%">Telp Sekolah</th>
			<th width="12%">Jml.Guru Honor</th>
			<th width="12%">Jml.Guru PNS</th>
			<th width="15%">Jml.Siswa Laki-Laki</th>
			<th width="15%">Jml.Siswi Perempuan</th>
			<th width="15%">Nama Kelurahan</th>
			
			
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
							<td colspan="4" align="right">
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