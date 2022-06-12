          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pengumuman</h1>

		<!-- Card New -->
		<div class="row">
		  <div class="col-sm-6">
		    <div class="card">
		    	<div class="card-header">
				    Detail Data User
				 </div>
			     <div class="card-body">
			        <h5 class="card-title"><label for="Nama">Username : <?= $administrator['username']; ?></label></h5>
					<h5 class="card-title"><label for="Email">Password : <?= $administrator['password']; ?></label></h5>
                    <h5 class="card-title"><label for="Email">Nama : <?= $administrator['nama']; ?></label></h5>
					<h5 class="card-title"><label for="Email">Akses : <?= $administrator['akses']; ?></label></h5>
					<a href="<?= base_url(); ?>User/user_admin" class="btn btn-primary">Kembali</a>
			     </div>
			    </div>
			</div>
		  </div>
		