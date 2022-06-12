<h1 class="h3 mb-4 text-gray-800">Pengumuman</h1>
<?= $this->session->flashdata('message'); ?>

<div class="row mt-3">
  <div class="col-md-6">
    <a href="<?= base_url(); ?>Pengumuman/tambah" class="btn btn-primary">Tambah Pengumuman</a>
  </div>
</div> 

<ul class="list-group mt-3">
  <?php foreach ($pengumuman as $lpn) : ?>
  <li class="list-group-item mb-1">
	<?= $lpn['judul']; ?>
	  <a href="<?= base_url(); ?>pengumuman/hapus/<?= $lpn['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin');">hapus</a>
	  <a href="<?= base_url(); ?>pengumuman/ubah/<?= $lpn['id']; ?>" class="badge badge-success float-right mr-2">ubah</a>
	  <a href="<?= base_url(); ?>pengumuman/detail/<?= $lpn['id']; ?>" class="badge badge-primary float-right mr-2">detail</a>
  </li>
  <?php endforeach; ?>
</ul>
<ul class="list-group">


