<div class="modal fade" id="modal_tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data  Rekap Siswa 
					<?php  foreach ($data as $d){ ?> 
						<?= $d['kode_sekolah']== $kode ? $d['nama_sekolah'] : null  ?>
										
					 <?php }  ?> </h4>
			</div>
			<?= form_open('master/Siswasekolah/store',  ['class' => 'form_create'], ['kode_sekolah' => $kode]) ?>
			<div class="modal-body">
				<div class="form-group">
					<input type="text" class="form-control kode_sekolahKU" name="kode_sekolah" value="<?= $kode  ?>">
				</div>
<div class="row">
		<div class="pesan_notifikasi">
			
<?php echo sukses('Data Jumlah Siswa Sekolah berhasil diupdate.'); ?>
		</div>
	<div class="col-xs-6">
				<div class="form-group">
					<label>Jumlah Siswa laki-Laki</label>
					<input type="text" name="siswa" class="form-control siswa" value="0">
					<!-- <span class="error siswa text-red"></span> -->
				</div>

				<div class="form-group">
					<label>Jumlah Siswi Perempuan</label>
					<input type="text" name="siswi" class="form-control siswi" value="0">
					<!-- <span class="error siswi text-red"></span> -->
				</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group">
					<label>Periode Penerimaan Semester</label>
					<select class="form-control semester" name="semester" >
						<option value="I">Semester I</option>
						<option value="II">Semester II</option>
					</select>	
					<!-- <span class="error semester text-red"></span> -->
				</div>

				<div class="form-group">
					<label>Periode Penerimaan Tahun</label>
					<select class="form-control tahun" name="tahun" >
						<?php for ($i=2010; $i < 2025 ; $i++) { ?>
						<option value="<?= $i ?>" <?= $i == date("Y")  ? 'selected' : null ?> ><?= $i ?></option>
						<?php } ?>
					</select>	
					<!-- <span class="error tahun text-red"></span> -->
				</div>
	</div>
</div>
				


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btnStoree"><i class="icon-floppy-disk"></i> Update</button>
				<button type="button" class="btn btn-danger tombloclose" data-dismiss="modal"><i class="icon-cross2"></i> Close</button>
				<div  class="tampil_tabel">cssc</div>

			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>

<script>
			$(document).on('focus', '.semester', function(e) {
				$('.kode_sekolah').removeAttr("disabled");});
			
			$(document).ready( function(e) {




	                    	$('.pesan_notifikasi').hide();




                formData = "&kode_sekolah=" + $('.kode_sekolahKU').val() + "&siswa=" + $('.siswa').val()+ "&siswi=" + $('.siswi').val()+ "&semester=" + $('.semester').val()+ "&tahun=" + $('.tahun').val();
                $.ajax({
                    url: '<?= site_url('master/Siswasekolah/tampil_tabel')  ?>',
                    type: "post",
                    data: formData,
                    cache: false,
                    beforeSend: function() {
						$('.btnStore').attr('disabled', 'disabled');
						$('.btnStore').html('<i class="fa fa-spin fa-spinner"></i> Sedang di Proses');
                    },
                    success: function(response) {
                        $('.error').html('');
                        $('.iconnotifie').removeClass('text-black fa-spin fa-spinner text-green fa-check text-red fa-close ');
	                      	$('.tampil_tabel').html('');
	                    	$('.tampil_tabel').html(response);

                       
                    },
                    // complete: function() {
                       
                    // }
                });
            });
	  $(document).on('click', '.tombloclose', function(e) {
	                      	window.location.href='<?= site_url('sikola')  ?>';

            });


	  $(document).on('click', '.btnStoree', function(e) {
                formData = "&kode_sekolah=" + $('.kode_sekolahKU').val() + "&siswa=" + $('.siswa').val()+ "&siswi=" + $('.siswi').val()+ "&semester=" + $('.semester').val()+ "&tahun=" + $('.tahun').val();
                $.ajax({
                    url: '<?= site_url('master/Siswasekolah/storeajx')  ?>',
                    type: "post",
                    data: formData,
                    cache: false,
                    beforeSend: function() {
						$('.btnStore').attr('disabled', 'disabled');
						$('.btnStore').html('<i class="fa fa-spin fa-spinner"></i> Sedang di Proses');
                    },
                    success: function(response) {
                        $('.error').html('');
                        $('.iconnotifie').removeClass('text-black fa-spin fa-spinner text-green fa-check text-red fa-close ');
	                      	$('.tampil_tabel').html('');
	                    	$('.tampil_tabel').html(response);

	                    	$('.pesan_notifikasi').show();
                            setTimeout(function() {
	                    	$('.pesan_notifikasi').hide();
                            }, 3000)
							 

                       
                    },
                    // complete: function() {
                       
                    // }
                });
            });
</script>
