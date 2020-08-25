<script>
	$(function() {
		$('.datepicker').datepicker({
			autoclose: true
		});
		$('input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		})
	});

	$(document).ready( function(e) {
				$('.dik2').hide();
				$('.dik3').hide();
				$('.dik4').hide();
				$('.dik5').hide();
				$('.dik6').hide();
				$('.dik7').hide();
				$('.dik8').hide();
				$('.dik9').hide();
				$('.dik10').hide();
				// $('.namadiklat2').hide();



	   	$(document).on('change', '.kodekepegawaian', function(e) {
			   let a=$('.kodekepegawaian').val();
			   if(a=="PG-02"){
				$('.kodegolongan').hide();
				$('.nosk').hide();
				$('.kodepangkat').hide();
				
			   }else{
				$('.kodegolongan').show();
				$('.nosk').show();
			   
			   }

	});
	   	let num=1;
   	$(document).on('click', '.tmbhdik', function(e) {
			num+=1;
			
			$('.dik'+num).show();

			   			

	});

	});

</script>
<div class="modal fade" id="modal_edit">
	<!-- <div class="modal-dialog"> -->
<div class="row ">
	<div class="col-lg-2 col-xs-6">
		<div style="height: 100px"></div>
	</div>
</div>
<div class="row ">
	<div class="col-lg-2 col-xs-6">A</div>
    <div class="col-lg-10 col-xs-8">
		<div style="width: 80%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Update Data</h4>
				</div>
				<?= form_open('master/Guru/update', ['id' => 'edit', 'class' => 'form_edit'], ['kode' => $data['nip_guru']]) ?>
				<div class="modal-body">
					<div class="row ">
						<!-- kiri plate -->
				        <div class="col-lg-4 col-xs-6">
    					<div class="form-group">
							<label>NIP</label>
							<input type="text" name="nip" class="form-control" value="<?= $data['nip_guru'] ?>" readonly="disabled">
							<span class="error nip text-red"></span>
						</div>
						<div class="form-group">
							<label>Nama Guru</label>
							<input type="text" name="nama" class="form-control" value="<?= $data['nama_guru'] ?>">
							<span class="error nama text-red"></span>
						</div>
						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="tmplahir" class="form-control" value="<?= $data['tmp_lahir_guru'] ?>">
							<span class="error tmplahir text-red"></span>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" name="tgllahir" class="form-control" value="<?= $data['tgl_lahir_guru'] ?>">
							<span class="error tgllahir text-red"></span>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" value="<?= $data['alamat_guru'] ?>">
							<span class="error alamat text-red"></span>
						</div>
						<div class="form-group">
							<label>No Telpon</label>
							<input type="text" name="tlp" class="form-control" value="<?= $data['telp_guru'] ?>">
							<span class="error tlp text-red"></span>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label><br>
							<label>
								<input type="radio" name="jenkel" class="minimal" value="L" <?= $data['jenkel_guru'] == "L" ? "checked" : "" ?>>
								Laki-laki
							</label>&nbsp;
							<label>
								<input type="radio" name="jenkel" class="minimal" value="P" <?= $data['jenkel_guru'] == "P" ? "checked" : "" ?>>
								Perempuan
							</label>
						</div>
				        </div>
						<!--/end kiri plate -->

						<!-- tengah plate -->
				        <div class="col-lg-4 col-xs-6">
				        	<!-- <div class="form-group">
								<label>Agama</label>
								<!-- <input type="text" name="agama" class="form-control"> -->
								<!-- <select class="form-control" name="agama">
									<?php foreach ($agama as $d) : ?>
										<option value="<?= $d; ?>"><?= $d; ?></option>
									<?php endforeach; ?>
								</select>
								<span class="error agama text-red"></span>
							</div>  -->
							<!-- <div class="form-group">
								<label>Status</label>
								<input type="text" name="status" class="form-control">
								<span class="error status text-red"></span>
							</div> -->
							<div class="form-group">
								<label>Jabatan</label>
								<input type="text" name="jabatan" class="form-control" value="<?= $data['jabatan_guru'] ?>">
								<span class="error jabatan text-red"></span>
							</div>
							<div class="form-group">
								<label>Masa Jabatan</label>
								<input type="text" name="masajabatan" class="form-control" value="<?= $data['masa_jabatan_guru'] ?>">
								<span class="error masajabatan text-red"></span>
							</div>


							<div class="col-lg-6 col-xs-6">
								<div class="form-group">
									<label>Nama Diklat I</label>
									<input type="text" name="namadiklat" class="form-control" value="<?= $data['nama_diklat_guru'] ?>">
									<span class="error namadiklat text-red"></span>
								</div>
							</div>
							<div class="col-lg-6 col-xs-6">
					        	<div class="form-group">
									<label>Tahun Diklat I</label>
									<input type="text" name="thndiklat" class="form-control thndiklat" multiple value="<?= $data['thn_diklat_guru'] ?>">
								</div>
							</div>

								<div class="col-lg-6 col-xs-6 dik2">
								<div class="form-group">
									<label>Nama Diklat II</label>
									<input type="text" name="namadiklat2" class="form-control" value="<?= $data['nama_diklat_guru2'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik2">
					        	<div class="form-group">
									<label>Tahun Diklat II</label>
									<input type="text" name="thndiklat2" class="form-control" value="<?= $data['thn_diklat_guru2'] ?>">
								</div>
							</div>
								<div class="col-lg-6 col-xs-6 dik3">
								<div class="form-group">
									<label>Nama Diklat III</label>
									<input type="text" name="namadiklat3" class="form-control" value="<?= $data['nama_diklat_guru3'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik3">
					        	<div class="form-group">
									<label>Tahun Diklat III</label>
									<input type="text" name="thndiklat3" class="form-control" value="<?= $data['thn_diklat_guru3'] ?>">
								</div>
							</div>
								<div class="col-lg-6 col-xs-6 dik4">
								<div class="form-group">
									<label>Nama Diklat IV</label>
									<input type="text" name="namadiklat4" class="form-control" value="<?= $data['nama_diklat_guru4'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik4">
					        	<div class="form-group">
									<label>Tahun Diklat IV</label>
									<input type="text" name="thndiklat4" class="form-control" value="<?= $data['thn_diklat_guru4'] ?>">
								</div>
							</div>

								<div class="col-lg-6 col-xs-6 dik5">
								<div class="form-group">
									<label>Nama Diklat V</label>
									<input type="text" name="namadiklat5" class="form-control" value="<?= $data['nama_diklat_guru5'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik5">
					        	<div class="form-group">
									<label>Tahun Diklat V</label>
									<input type="text" name="thndiklat5" class="form-control" value="<?= $data['thn_diklat_guru5'] ?>">
								</div>
							</div>

								<div class="col-lg-6 col-xs-6 dik6">
								<div class="form-group">
									<label>Nama Diklat VI</label>
									<input type="text" name="namadiklat6" class="form-control" value="<?= $data['nama_diklat_guru6'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik6">
					        	<div class="form-group">
									<label>Tahun Diklat VI</label>
									<input type="text" name="thndiklat6" class="form-control" value="<?= $data['thn_diklat_guru6'] ?>">
								</div>
							</div>
								<div class="col-lg-6 col-xs-6 dik7">
								<div class="form-group">
									<label>Nama Diklat VII</label>
									<input type="text" name="namadiklat7" class="form-control" value="<?= $data['nama_diklat_guru7'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik7">
					        	<div class="form-group">
									<label>Tahun Diklat VII</label>
									<input type="text" name="thndiklat7" class="form-control" value="<?= $data['thn_diklat_guru7'] ?>">
								</div>
							</div>

								<div class="col-lg-6 col-xs-6 dik8">
								<div class="form-group">
									<label>Nama Diklat VIII</label>
									<input type="text" name="namadiklat8" class="form-control" value="<?= $data['nama_diklat_guru8'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik8">
					        	<div class="form-group">
									<label>Tahun Diklat VIII</label>
									<input type="text" name="thndiklat8" class="form-control" value="<?= $data['thn_diklat_guru8'] ?>">
								</div>
							</div>
								<div class="col-lg-6 col-xs-6 dik9">
								<div class="form-group">
									<label>Nama Diklat IX</label>
									<input type="text" name="namadiklat9" class="form-control" value="<?= $data['nama_diklat_guru9'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik9">
					        	<div class="form-group">
									<label>Tahun Diklat IX</label>
									<input type="text" name="thndiklat9" class="form-control" value="<?= $data['thn_diklat_guru9'] ?>">
								</div>
							</div>

								<div class="col-lg-6 col-xs-6 dik10">
								<div class="form-group">
									<label>Nama Diklat X</label>
									<input type="text" name="namadiklat10" class="form-control" value="<?= $data['nama_diklat_guru10'] ?>">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 dik10">
					        	<div class="form-group">
									<label>Tahun Diklat X</label>
									<input type="text" name="thndiklat10" class="form-control" value="<?= $data['thn_diklat_guru10'] ?>">
								</div>
							</div>
							<div class="col-lg-3 col-xs-6"></div>
							<div class="col-lg-3 col-xs-6">

								<a class="btn bg-yellow tmbhdik"><i  class="icon-plus3"></i>  Tambah Diklat+</a>
							</div>
<!-- 							<div class="form-group">
								<label>Nama Diklat</label>
								<input type="text" name="namadiklat" class="form-control">
								<span class="error namadiklat text-red"></span>
							</div> -->

				        </div>
						<!--/end tengah plate -->

<div class="col-lg-4 col-xs-6">
							<div class="form-group">
								<label>Pendidiakn Terakhir </label>
								<select class="form-control"  name="pendidikan_terakhir">
									<option <?= $data['pendidikan_terakhir'] == 'S1'? 'selected' : null ?> >S1</option>
									<option <?= $data['pendidikan_terakhir'] == 'S2'? 'selected' : null ?>>S2</option>
									<option <?= $data['pendidikan_terakhir'] == 'S3'? 'selected' : null ?>>S3</option>
								</select>
								<span class="error pendidikan_terakhir text-red"></span>
							</div>
				<div class="form-group">
					<label>Kode Sekolah</label>
					<select class="form-control" name="kodesekolah">
						<option value="">-- Pilih Sekolah --</option>
						<?php foreach ($dsekolah as $d) : ?>
							<option <?= $data['kode_sekolah_guru'] == $d['kode_sekolah'] ? 'selected' : null ?>
							 value="<?= $d['kode_sekolah']; ?>"><?= $d['kode_sekolah']."-". $d['nama_sekolah']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error kodesekolah text-red"></span>
				</div>
				<div class="form-group">
					<label>Matapelajaran</label>
					<select class="form-control" name="kodejenisguru">
						<option value="">-- Pilih Kode --</option>
						<?php foreach ($dmapel as $d) : ?>
							<option <?= $data['kode_jenis_guru'] == $d['kode_matapelajaran'] ? 'selected' : null ?>
							 value="<?= $d['kode_matapelajaran']; ?>"><?= $d['kode_matapelajaran']."-". $d['nama_matapelajaran']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error kodejenisguru text-red"></span>
				</div>
<!-- 				<div class="form-group">
					<label>Tanggal Diangkat</label>
					<input type="date" name="tgldiangkat" class="form-control">
					<span class="error tgldiangkat text-red"></span>
				</div> -->
				<div class="form-group">
					<label>Kode Kepegawaian</label>
					<select class="form-control kodekepegawaian" name="kodekepegawaian">
						<option value="">-- Pilih Kepegawaian --</option>
						<?php foreach ($dkepegawaian as $d) : ?>
							<option <?= $data['kode_pegawai_guru'] == $d['kode_pegawai'] ? 'selected' : null ?>
							 value="<?= $d['kode_pegawai']; ?>"><?= $d['kode_pegawai']."-". $d['status_pegawai']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error kodekepegawaian text-red"></span>
				</div>
				<div class="form-group">
					<label class="nosk">No SK</label>
					<input type="text " value="<?= $data['no_sk_guru']; ?>" name="nosk" class="form-control nosk">
					<span class="error nosk text-red"></span>
				</div>
				<div class="form-group">
					<label class="kodegolongan">Kode Golongan</label>
					<select class="form-control kodegolongan" name="kodegolongan">
						<option value="">-- Pilih Golongan --</option>
						<?php foreach ($dgolongan as $d) : ?>
							<option <?= $data['kode_golongan_guru'] == $d['kode_golongan'] ? 'selected' : null ?>
							 value="<?= $d['kode_golongan']; ?>"><?= $d['kode_golongan']."-". $d['nama_golongan']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error kodegolongan text-red"></span>
				</div>
				<div class="form-group">
					<label class="kodepangkat">Pangkat</label>
					<select class="form-control kodepangkat" name="kodepangkat">
						<option value="">-- Pilih Pangkat --</option>
						<?php foreach ($dpangkat as $d) : ?>
							<option <?= $data['kode_pangkat_guru'] == $d['kode_pangkat'] ? 'selected' : null ?>
							 value="<?= $d['kode_pangkat']; ?>"><?= $d['pangkat_kode_golongan']; ?></option>
						<?php endforeach; ?>
					</select>
					<span class="error kodepangkat text-red"></span>
				</div>
				        </div>

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
					window.location.href = "<?= site_url('gr') ?>";
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
