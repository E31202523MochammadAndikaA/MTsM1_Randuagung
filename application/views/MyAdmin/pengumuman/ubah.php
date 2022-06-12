
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pengumuman</h1>

          <div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Ubah Data Pengumuman
			  </div>

			  <?= $this->session->flashdata('message'); ?>
			  
			  <div class="card-body">
			    <form action="" method="post">
			    	<input type="hidden" name="id" value="<?= $admin['id']; ?>">
                    <div class="form-group">
					   <label for="judul">Judul</label>
					   <input type="text" name="judul" class="form-control" id="judul" value="<?= $admin['judul']; ?>">
					   <small class="form-text text-danger"><?= form_error('judul'); ?></small>
					</div>
                    <div class="form-group">
					   <label for="tanggal_terbit">tanggal_terbit</label>
					   <input type="text" name="tanggal_terbit" class="form-control" id="tanggal_terbit" value="<?= $admin['tanggal_terbit']; ?>">
					   <small class="form-text text-danger"><?= form_error('tanggal_terbit'); ?></small>
					</div>
                    <div class="form-group">
					   <label for="isi">Isi</label>
					   <input type="text" name="isi" class="form-control" id="isi" value="<?= $admin['isi']; ?>">
					   <small class="form-text text-danger"><?= form_error('isi'); ?></small>
					</div>
					  <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					  <a href="<?= base_url(); ?>Pengumuman/pengumuman_admin" class="btn btn-primary">Kembali</a>
					</form>
			  </div>
			</div>
		</div>
	</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->




      