<div class="modal fade" id="modal_tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data</h4>
			</div>
			<?= form_open('master/Pendguru/store', ['class' => 'form_create']) ?>
			<div class="modal-body">
				<div class="form-group">
					<label>NIP Guru</label>
					<select class="form-control" name="nippend">
						<option value="">-- Pilih NIP --</option>
						<?php foreach ($dguru as $d) : ?>
							<option value="<?= $d['nip_guru']; ?>"><?= $d['nip_guru']."-".  $d['nama_guru']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error nippend text-red"></span>
				</div>


						<hr>
            					<div class="form-group">
									<label>Asal Pendidikan SMA</label>
									<input type="text" name="sma" class="form-control">
									<span class="error sma text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Jurusan</label>
									<input type="text" name="smajurusan" class="form-control">
									<span class="error smajurusan text-red"></span>
								</div>

			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="smatahunlulus" class="form-control">
									<span class="error smatahunlulus text-red"></span>
								</div>

			                </div>
			            </div>
			            <hr>
			            <hr>
            					<div class="form-group">
									<label>Asal Pendidikan S1</label>
									<input type="text" name="s1" class="form-control">
									<span class="error s1 text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Bidang Studi / Jurusan</label>
									<input type="text" name="s1jurusan" class="form-control">
									<span class="error instansi text-red"></span>
								</div>
            					<div class="form-group">
									<label>Gelar Akademic</label>
									<input type="text" name="s1gelar" class="form-control">
									<span class="error s1gelar text-red"></span>
								</div>

			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="s1tahunlulus" class="form-control">
									<span class="error s1tahunlulus text-red"></span>
								</div>

			                </div>
			            </div>
			            <hr>
			            <hr>
            					<div class="form-group">
									<label>Asal Pendidikan S2</label>
									<input type="text" name="s2" class="form-control">
									<span class="error s2 text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Bidang Studi </label>
									<input type="text" name="s2jurusan" class="form-control">
									<span class="error s2jurusan text-red"></span>
								</div>
            					<div class="form-group">
									<label>Gelar Akademic</label>
									<input type="text" name="s2gelar" class="form-control">
									<span class="error instansi text-red"></span>
								</div>

			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="s2tahunlulus" class="form-control">
									<span class="error instansi text-red"></span>
								</div>

			                </div>
			            </div>
			            <hr>
			            			            <hr>
            					<div class="form-group">
									<label>Asal Lainnya</label>
									<input type="text" name="Lainnya" class="form-control">
									<span class="error Lainnya text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Jurusan</label>
									<input type="text" name="Lainnyajurusan" class="form-control">
									<span class="error Lainnyajurusan text-red"></span>
								</div>
            					<div class="form-group">
									<label>Gelar Akademic</label>
									<input type="text" name="Lainnyagelar" class="form-control">
									<span class="error Lainnyagelar text-red"></span>
								</div>

			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="Lainnyatahunlulus" class="form-control">
									<span class="error Lainnyatahunlulus text-red"></span>
								</div>

			                </div>
			            </div>
			            <hr>

			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary btnStore"><i class="icon-floppy-disk"></i> Simpan</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross2"></i> Close</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>
<script>
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
					window.location.href = "<?= site_url('pendgr') ?>";
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
