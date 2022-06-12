<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-e font-weight-bold text-primary">Tables User</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="e">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Akses</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($user as $baris) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $baris->username; ?></td>
							<td><?php echo $baris->nama; ?></td>
							<td><?php echo $baris->akses; ?></td>
							<td>
								<?php
								$getUser =$this->session->userdata('session_ user');
								$getGrup = $this->session->userdata('session_grup');
								if($getGrup ==1){
								echo '<a href="' .base_url('Mahasiswa/edit/' . $baris->id).'" class="fa fa-edit"></a>';
								echo " ";
								echo '<a href="' .base_url('Mahasiswa/hapus/' . $baris->id).'" class="fa fa-times"></a>';	
								}
								?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<a href="<?php echo base_url('Admin/tambah') ?>" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Data</span>
		</a>
	</div>
</div>
<?php

?>