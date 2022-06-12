          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pengumuman</h1>

		<!-- Card New -->
		<div class="row">
		  <div class="col-sm-6">
		    <div class="card">
		    	<div class="card-header">
				    Detail Pengumuman
				 </div>
			     <div class="card-body">
					<h5 class="card-title"><label for="Email">judul : <?= $inpo['judul']; ?></label></h5>
                    <h5 class="card-title"><label for="Email">tanggal_terbit : <?= $inpo['tanggal_terbit']; ?></label></h5>
					<h5 class="card-title"><label for="Email">isi : <?= $inpo['isi']; ?></label></h5>
					<a href="<?= base_url(); ?>Pengumuman/pengumuman_admin" class="btn btn-primary">Kembali</a>
			     </div>
			    </div>
			  </div>
		  </div>