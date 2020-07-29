<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<a href="#" class="btn bg-aqua cetak"><i class="fa fa-print">Cetak Laporan</i></a>
				<a href="<?= site_url('Home') ?>" class="btn bg-yellow"><i class="fa fa-backward">Kembali</i></a>

				<center><h2><b>Laporan Data Sekolah Per Semester</b></h2></center>
				<center><h4><b>Kecamatan Padang Timur</b></h4></center>
				<center><h4><b>Kota Padang</b></h4></center>


				<hr>
					<div class="col-lg-2 col-xs-6">
						<div style="height: 7px"></div>
    							<div class="form-group">
								<label> Penerimaan Semester</label>
						</div>

						<div style="height: 7px"></div>
    					<div class="form-group">
					<label> Penerimaan Tahun</label>
							
						</div>	
					</div>
					<div class="col-lg-3 col-xs-6">
    					<div class="form-group">
							<select class="form-control semester" name="semester" >
								<option value="I">Semester I</option>
								<option value="II">Semester II</option>
							</select>	
						</div>

						<div class="form-group">
							<select class="form-control tahun" name="tahun" >
								<?php for ($i=2010; $i < 2025 ; $i++) { ?>
								<option value="<?= $i ?>" <?= $i == date("Y")  ? 'selected' : null ?> ><?= $i ?></option>
								<?php } ?>
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
		// asset
		$('.semester').select2();
		$('.tahun').select2();
		// endasset

	let kode= "&a=" +$('.semester').val()+"&b=" +$('.tahun').val();
	          $.ajax({
                    url: '<?= site_url('master/Lapsekolah_Semester/tabel_kode')  ?>',
                    type: "post",
                    data: kode,
                    cache: false,
                    success: function(response) {
                    	// alert("Golongan harus dipilih");
                    	$('.tampil_tabel').html('');
                    	$('.tampil_tabel').html(response);
                    }
                });

	   
	   		   	$(document).on('change', '.semester', function(e) {
 		let kode= "&a=" +$('.semester').val()+"&b=" +$('.tahun').val();
	          $.ajax({
                    url: '<?= site_url('master/Lapsekolah_Semester/tabel_kode')  ?>',
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
	   		   	$(document).on('change', '.tahun', function(e) {
 		let kode= "&a=" +$('.semester').val()+"&b=" +$('.tahun').val();
	          $.ajax({
                    url: '<?= site_url('master/Lapsekolah_Semester/tabel_kode')  ?>',
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

 		let kode= "/" +$('.semester').val()+"/" +$('.tahun').val();
                    	    setTimeout(function() {
                                window.location.href = '<?= site_url('master/Lapsekolah_Semester/cetak')?>'+kode;
                            }, 100);

	});
	});

</script>