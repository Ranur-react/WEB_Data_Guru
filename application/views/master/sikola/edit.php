<div class="modal fade" id="modal_edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Update Data</h4>
			</div>
			<?= form_open('master/Sekolah/update', ['id' => 'edit', 'class' => 'form_edit'], ['kode' => $data['kode_sekolah']]) ?>
			<div class="modal-body">
				<div class="form-group">
					<label>Kode Sekolah</label>
					<input type="text" name="kode" class="form-control" value="<?= $data['kode_sekolah'] ?>" readonly="disabled">
					<span class="error kode text-red"></span>
				</div>

				<div class="form-group">
					<label>Nama Sekolah</label>
					<input type="text" name="nama" class="form-control" value="<?= $data['nama_sekolah'] ?>">
					<span class="error nama text-red"></span>
				</div>
				<div class="form-group">
					<label>Nama Kepala Sekolah</label>
					<input type="text" name="nama_kepsek" value="<?= $data['nama_kepsek'] ?>" class="form-control">
					<span class="error nama_kepsek text-red"></span>
				</div>
				<div class="form-group">
					<label>Alamat Sekolah</label>
					<input type="text" name="alamat" class="form-control" value="<?= $data['alamat_sekolah'] ?>">
					<span class="error alamat text-red"></span>
				</div>

				<div class="form-group">
					<label>Telp Sekolah</label>
					<input type="text" name="telp" class="form-control" value="<?= $data['telp_sekolah'] ?>">
					<span class="error telp text-red"></span>
				</div>

<!-- 
				<div class="form-group">
					<label>Jml.Siswa Laki-Laki</label>
					<input type="text" name="jmllk" class="form-control" value="<?= $data['jml_siswa_lk'] ?>">
					<span class="error jmllk text-red"></span>
				</div>

				<div class="form-group">
					<label>Jml.Siswi Perempuan</label>
					<input type="text" name="jmlpr" class="form-control" value="<?= $data['jml_siswa_pr'] ?>">
					<span class="error jmlpr text-red"></span>
				</div> -->

				<div class="form-group">
					<label>Kode Kelurahan</label>
					<select class="form-control" name="kodelurah">
						<option value="">-- Pilih Kelurahan --</option>
						<?php foreach ($dlurah as $d) : ?>
							<option value="<?= $d['kode_lurah']; ?>" <?= $d['kode_lurah'] == $data['kode_lurah_sekolah'] ? 'selected' : null ?>><?= $d['kode_lurah']."-". $d['nama_lurah']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error kodelurah text-red"></span>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary btnUpdate"><i class="icon-floppy-disk"></i> Update</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross2"></i> Close</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>
<script>
	$(document).on('submit', '.form_edit', function(e) {
		$.ajax({
			type: "post",
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: "json",
			cache: false,
			beforeSend: function() {
				$('.btnUpdate').attr('disabled', 'disabled');
				$('.btnUpdate').html('<i class="fa fa-spin fa-spinner"></i> Sedang di Proses');
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
				$('.btnUpdate').removeAttr('disabled');
				$('.btnUpdate').html('<i class="icon-floppy-disk"></i> Update');
			}
		});
		return false;
	});
</script>
