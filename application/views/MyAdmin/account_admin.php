<h1 class="h3 mb-4 text-gray-800">Account</h1>
<?= $this->session->flashdata('message'); ?>

<div class="row mt-3">
  <div class="col-md-6">
    <a href="<?= base_url(); ?>User/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
  </div>
</div> 

<ul class="list-group mt-3">
  <?php foreach ($user as $usr) : ?>
  <li class="list-group-item mb-1">
	<?= $usr['username']; ?>
	  <a href="<?= base_url(); ?>User/hapus/<?= $usr['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin');">hapus</a>
	  <a href="<?= base_url(); ?>User/ubah/<?= $usr['id']; ?>" class="badge badge-success float-right mr-2">ubah</a>
	  <a href="<?= base_url(); ?>User/detail/<?= $usr['id']; ?>" class="badge badge-primary float-right mr-2">detail</a>
  </li>
  <?php endforeach; ?>
</ul>
<ul class="list-group">


