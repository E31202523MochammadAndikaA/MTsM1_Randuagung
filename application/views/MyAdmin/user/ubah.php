

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">User</h1>

          <div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Ubah Data Admin
			  </div>

			  <?= $this->session->flashdata('message'); ?>
			  
			  <div class="card-body">
			    <form action="" method="post">
			    	<input type="hidden" name="id" value="<?= $admin['id']; ?>">
                    <div class="form-group">
					   <label for="nama">Username</label>
					   <input type="text" name="username" class="form-control" id="username" value="<?= $admin['username']; ?>">
					   <small class="form-text text-danger"><?= form_error('username'); ?></small>
					</div>
                    <div class="form-group">
					   <label for="nama">Password</label>
					   <input type="text" name="password" class="form-control" id="password" value="<?= $admin['password']; ?>">
					   <small class="form-text text-danger"><?= form_error('password'); ?></small>
					</div>
                    <div class="form-group">
					   <label for="nama">Nama</label>
					   <input type="text" name="nama" class="form-control" id="nama" value="<?= $admin['nama']; ?>">
					   <small class="form-text text-danger"><?= form_error('nama'); ?></small>
					</div>
					  <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					  <a href="<?= base_url(); ?>User/user_admin" class="btn btn-primary">Kembali</a>
					</form>
			  </div>
			</div>
		</div>
	</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->




      