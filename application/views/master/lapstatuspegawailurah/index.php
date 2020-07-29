<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<a href="#" class="btn bg-aqua"><i class="fa fa-print cetak">Cetak Laporan</i></a>
				<a href="<?= site_url('Home') ?>" class="btn bg-yellow"><i class="fa fa-backward">Kembali</i></a>

				<center><h2><b>Laporan Data berdasarkan Status Kepegawaian per Kelurahan</b></h2></center>
				<center><h4><b>Kecamatan Padang Timur</b></h4></center>
				<center><h4><b>Kota Padang</b></h4></center>
				<hr>
					<div class="col-lg-2 col-xs-6">
						<div style="height: 7px"></div>
    					<div class="form-group">
							<label>Kode/Nama Kelurahan</label>
						</div>

						<div style="height: 7px"></div>
    					<div class="form-group">
							<label>Status Kepegawaian</label>
						</div>	
					</div>
					<div class="col-lg-3 col-xs-6">
    					<div class="form-group">
							<select class="form-control kode_lurah" name="kodesekolah">
						<?php foreach ($dlurah as $d) : ?>
							<option value="<?= $d['kode_lurah']; ?>"><?=$d['kode_lurah']; ?>-<?=$d['nama_lurah']; ?></option>
						<?php endforeach; ?>
					</select>
						</div>

						<div class="form-group">
							<select class="form-control status_pegawai" name="kodegol">
						<?php foreach ($dpegawai as $d) : ?>
							<option value="<?= $d['status_pegawai']; ?>"><?=$d['status_pegawai']; ?></option>
						<?php endforeach; ?>
					</select>
						</div>
					</div>
				</hr>
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<div  class="tampil_tabel">cssc</div>

			</div>
		</div>
	</div>
</div>

<div id="tampil_modal"></div>


<script type="text/javascript">
	$(document).ready( function(e) {
		$('.status_pegawai').select2();
		$('.kode_lurah').select2();
		
	let kode= "&a=" +$('.status_pegawai').val()+"&b=" +$('.kode_lurah').val();
	          $.ajax({
                    url: '<?= site_url('master/Lapstatuspegawailurah/tabel_kode')  ?>',
                    type: "post",
                    data: kode,
                    cache: false,
                    success: function(response) {
                    	// alert("Golongan harus dipilih");
                    	$('.tampil_tabel').html('');
                    	$('.tampil_tabel').html(response);
                    }
                });

	   
	   		   	$(document).on('change', '.status_pegawai', function(e) {
 		let kode= "&a=" +$('.status_pegawai').val()+"&b=" +$('.kode_lurah').val();
	          $.ajax({
                    url: '<?= site_url('master/Lapstatuspegawailurah/tabel_kode')  ?>',
                    type: "post",
                    data: kode,
                    cache: false,
                    success: function(response) {
                    	// alert("Golongan harus dipilih");
                    	$('.tampil_tabel').html('');
                    	$('.tampil_tabel').html(response);
                    }
                });


	});

	   		   	$(document).on('change', '.kode_lurah', function(e) {
 		let kode= "&a=" +$('.status_pegawai').val()+"&b=" +$('.kode_lurah').val();
	          $.ajax({
                    url: '<?= site_url('master/Lapstatuspegawailurah/tabel_kode')  ?>',
                    type: "post",
                    data: kode,
                    cache: false,
                    success: function(response) {
                    	// alert("Golongan harus dipilih");
                    	$('.tampil_tabel').html('');
                    	$('.tampil_tabel').html(response);
                    }
                });


	});
	   		$(document).on('click', '.cetak', function(e) {
 		let kode= "/" +$('.status_pegawai').val()+"/" +$('.kode_lurah').val();
                    	    setTimeout(function() {
                                window.location.href = '<?= site_url('master/Lapstatuspegawailurah/cetak')?>'+kode;
                            }, 100);

	});
	});

</script>