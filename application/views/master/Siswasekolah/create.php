<div class="modal fade" id="modal_tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data</h4>
			</div>
			<?= form_open('master/Siswasekolah/store',  ['class' => 'form_create'], ['kode_sekolah' => $kode]) ?>
			<div class="modal-body">
				<div class="form-group">
					<label>Pilih Sekolah</label>
					<select class="form-control kode_sekolah" disabled name="kode_sekolah" >
						<?php foreach ($data as $d) {  ?>
						<option value="<?=$d['kode_sekolah'] ?>" <?= $d['kode_sekolah']== $kode ? 'selected' : null  ?>><?= $d['nama_sekolah'] ?> </option>
						<?php } ?>
					</select>	
					<!-- <input type="text" name="kode" class="form-control"> -->
					<span class="error kode_sekolah text-red"></span>
				</div>
<div class="row">
	<div class="col-xs-6">
				<div class="form-group">
					<label>Jumlah Siswa laki-Laki</label>
					<input type="text" name="siswa" class="form-control" value="0">
					<span class="error siswa text-red"></span>
				</div>

				<div class="form-group">
					<label>Jumlah Siswi Perempuan</label>
					<input type="text" name="siswi" class="form-control" value="0">
					<span class="error siswi text-red"></span>
				</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group">
					<label>Periode Penerimaan Semester</label>
					<select class="form-control semester" name="semester" >
						<option value="I">Semester I</option>
						<option value="II">Semester II</option>
					</select>	
					<span class="error semester text-red"></span>
				</div>

				<div class="form-group">
					<label>Periode Penerimaan Tahun</label>
					<select class="form-control" name="tahun" >
						<?php for ($i=2010; $i < 2025 ; $i++) { ?>
						<option value="<?= $i ?>" <?= $i == date("Y")  ? 'selected' : null ?> ><?= $i ?></option>
						<?php } ?>
					</select>	
					<span class="error tahun text-red"></span>
				</div>
	</div>
</div>
				


			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success btnStore"><i class="icon-floppy-disk"></i> Update</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross2"></i> Close</button>


				<table class="table table-bordered table-striped data-tabel">
					<thead>
						<tr>
							<th>Semester</th>
							<th>Tahun</th>
							<th>Alamat Sekolah</th>
							<th>Jumlah Siswa</th>
							<th>Jumlah Siswi</th>
							<th>Total </th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
				</table>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>
<script>
			$(document).on('focus', '.semester', function(e) {
				$('.kode_sekolah').removeAttr("disabled");
	});
	// $(document).on('click', '.btntambah', function(e) {
	// 	$.ajax({
	// 		url: "<?= site_url('master/Sekolah/create') ?>",
	// 		success: function(data) {
	// 			$('#tampil_modal').html(data);
	// 			$('#modal_tambah').modal('show');
	// 		}
	// 	});
	// });

	$(document).on('submit', '.form_create', function(e) {
		$.ajax({
			type: "post",
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: "json",
			cache: false,
			beforeSend: function() {
				$('.btnStore').attr('disabled', 'disabled');
				$('.btnStore').html('<i class="fa fa-spin fa-spinner"></i> Sedang di Proses');
			},
			success: function(response) {
				$('.error').html('');
				if (response.status == false) {
					$.each(response.pesan, function(i, m) {
						$('.' + i).text(m);
					});
				} else {
					window.location.href = "<?= site_url('sikola') ?>";
				}
			},
			complete: function() {
				$('.btnStore').removeAttr('disabled');
				$('.btnStore').html('<i class="icon-floppy-disk"></i> Simpan');
			}
		});
		return false;
	});
</script>
