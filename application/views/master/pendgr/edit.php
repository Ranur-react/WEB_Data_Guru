<div class="modal fade" id="modal_edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Update Data</h4>
			</div>
			<?= form_open('master/Pendguru/update', ['id' => 'edit', 'class' => 'form_edit'], ['kode' => $data['nip_pend_guru']]) ?>
<!-- //body -->
			<div class="modal-body">
				<div class="form-group">
					<label>NIP Guru</label>
					<select class="form-control" name="nippend">
						<option value="">-- Pilih NIP --</option>
						<?php foreach ($dguru as $d) : ?>
							<option <?= $d['nip_guru'] == $data['nip_pend_guru'] ? 'selected' : null  ?> value="<?= $d['nip_guru']; ?>"><?= $d['nip_guru']."-".  $d['nama_guru']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error nippend text-red"></span>
				</div>
						<hr>
            					<div class="form-group">
									<label>Asal Pendidikan SMA</label>
									<input type="text" name="sma" class="form-control" value="<?= $data['sma'] ?>">
									<span class="error sma text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Jurusan</label>
									<input type="text" name="smajurusan" class="form-control" value="<?= $data['smajurusan'] ?>">
									<span class="error smajurusan text-red"></span>
								</div>
			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="smatahunlulus" class="form-control" value="<?= $data['smatahunlulus'] ?>">
									<span class="error smatahunlulus text-red"></span>
								</div>
			                </div>
			            </div>
			            <hr>
			            <hr>
            					<div class="form-group">
									<label>Asal Pendidikan S1</label>
									<input type="text" name="s1" class="form-control" value="<?= $data['s1'] ?>">
									<span class="error s1 text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Bidang Studi / Jurusan</label>
									<input type="text" name="s1jurusan" class="form-control" value="<?= $data['s1jurusan'] ?>">
									<span class="error instansi text-red"></span>
								</div>
            					<div class="form-group">
									<label>Gelar Akademic</label>
									<input type="text" name="s1gelar" class="form-control" value="<?= $data['s1gelar'] ?>">
									<span class="error s1gelar text-red"></span>
								</div>
			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="s1tahunlulus" class="form-control" value="<?= $data['s1tahunlulus'] ?>">
									<span class="error s1tahunlulus text-red"></span>
								</div>
			                </div>
			            </div>
			            <hr>
			            <hr>
            					<div class="form-group">
									<label>Asal Pendidikan S2</label>
									<input type="text" name="s2" class="form-control" value="<?= $data['s2'] ?>">
									<span class="error s2 text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Bidang Studi </label>
									<input type="text" name="s2jurusan" class="form-control" value="<?= $data['s2jurusan'] ?>">
									<span class="error s2jurusan text-red"></span>
								</div>
            					<div class="form-group">
									<label>Gelar Akademic</label>
									<input type="text" name="s2gelar" class="form-control" value="<?= $data['s2gelar'] ?>">
									<span class="error instansi text-red"></span>
								</div>
			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="s2tahunlulus" class="form-control" value="<?= $data['s2tahunlulus'] ?>">
									<span class="error instansi text-red"></span>
								</div>
			                </div>
			            </div>
			            <hr>
			            <hr>
            					<div class="form-group">
									<label>Asal Lainnya</label>
									<input type="text" name="Lainnya" class="form-control" value="<?= $data['Lainnya'] ?>">
									<span class="error Lainnya text-red"></span>
								</div>
		 				 <div class="row">
			                <div class="col-xs-6">
            					<div class="form-group">
									<label>Jurusan</label>
									<input type="text" name="Lainnyajurusan" class="form-control" value="<?= $data['Lainnyajurusan'] ?>">
									<span class="error Lainnyajurusan text-red"></span>
								</div>
            					<div class="form-group">
									<label>Gelar Akademic</label>
									<input type="text" name="Lainnyagelar" class="form-control" value="<?= $data['lainnyagelar'] ?>">
									<span class="error Lainnyagelar text-red"></span>
								</div>
			                </div>
				               <div class="col-xs-6">
            					<div class="form-group">
									<label>Tahun Lulus</label>
									<input type="text" name="Lainnyatahunlulus" class="form-control" value="<?= $data['Lainnyatahunlulus'] ?>">
									<span class="error Lainnyatahunlulus text-red"></span>
								</div>

			                </div>
			            </div>
			            <hr>

			</div>
<!-- 	<div class="modal-body">
				<div class="form-group">
					<label>NIP Guru</label>
					<input type="text" name="nippend" class="form-control" value="<?= $data['nip_pend_guru'] ?>" readonly="disabled">
					<span class="error nippend text-red"></span>
				</div>
				<hr>
				<div class="form-group">
					<label>Asal Pendidikan SLTA/SMA</label>
					<input type="text" name="sma" value="<?= $data['nip_pend_guru'] ?> class="form-control">
					<span class="error sma text-red"></span>
				</div>
		 <div class="row">
            <div class="col-xs-6">
				<div class="form-group">
					<label>Jurusan</label>
					<input type="text" name="smajurusan" value="<?= $data['nip_pend_guru'] ?> class="form-control">
					<span class="error smajurusan text-red"></span>
				</div>
            </div>
           <div class="col-xs-6">
				<div class="form-group">
					<label>Tahun Lulus</label>
					<input type="text" name="smatahunlulus" value="<?= $data['nip_pend_guru'] ?> class="form-control">
					<span class="error smatahunlulus text-red"></span>
				</div>
            </div>
        </div>
        <hr>
        <hr>
				<div class="form-group">
					<label>Asal Pendidikan S1</label>
					<input type="text" name="s1" value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error s1 text-red"></span>
				</div>
		 <div class="row">
		    <div class="col-xs-6">
				<div class="form-group">
					<label>Bidang Studi / Jurusan</label>
					<input type="text" name="s1jurusan" value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error instansi text-red"></span>
				</div>
				<div class="form-group">
					<label>Gelar Akademic</label>
					<input type="text" name="s1gelar" value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error s1gelar text-red"></span>
				</div>
            </div>
           <div class="col-xs-6">
				<div class="form-group">
					<label>Tahun Lulus</label>
					<input type="text" name="s1tahunlulus" value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error s1tahunlulus text-red"></span>
				</div>
            </div>
        </div>
        <hr>
		<hr>
				<div class="form-group">
					<label>Asal Pendidikan S2</label>
					<input type="text" name="s2" value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error s2 text-red"></span>
				</div>
		<div class="row">
            <div class="col-xs-6">
				<div class="form-group">
					<label>Bidang Studi </label>
					<input type="text" name="s2jurusan" value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error s2jurusan text-red"></span>
				</div>
				<div class="form-group">
					<label>Gelar Akademic</label>
					<input type="text" name="s2gelar" value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error instansi text-red"></span>
				</div>
            </div>
           <div class="col-xs-6">
				<div class="form-group">
					<label>Tahun Lulus</label>
					<input type="text" name="s2tahunlulus"  value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error instansi text-red"></span>
				</div>
            </div>
        </div>
        <hr>
        <hr>
				<div class="form-group">
					<label>Asal Lainnya</label>
					<input type="text" name="Lainnya"  value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error Lainnya text-red"></span>
				</div>
		 <div class="row">
            <div class="col-xs-6">
				<div class="form-group">
					<label>Jurusan</label>
					<input type="text" name="Lainnyajurusan"  value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error Lainnyajurusan text-red"></span>
				</div>
				<div class="form-group">
					<label>Gelar Akademic</label>
					<input type="text" name="Lainnyagelar"  value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error Lainnyagelar text-red"></span>
				</div>
            </div>
               <div class="col-xs-6">
				<div class="form-group">
					<label>Tahun Lulus</label>
					<input type="text" name="Lainnyatahunlulus"  value="<?= $data['nip_pend_guru'] ?>" class="form-control">
					<span class="error Lainnyatahunlulus text-red"></span>
				</div>
            </div>
        </div>
        <hr>
	</div> -->
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
					window.location.href = "<?= site_url('pendgr') ?>";
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
