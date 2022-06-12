<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Pengumuman
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('Pengumuman/proses_tambah'); ?>
                    <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="userfile" class="form-control" id="gambar" size="20">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_terbit">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" class="form-control" id="tanggal_terbit">
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <input type="text" name="isi" class="form-control" id="isi">
                            <small class="form-text text-danger"><?= form_error('isi'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        
                        <?php echo form_close(); ?>
                        <a href="<?= base_url(); ?>Pengumuman/pengumuman_admin" class="btn btn-primary">Kembali</a>
                </div>
            </div>


        </div>
    </div>

</div>