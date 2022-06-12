
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pengumuman</h2>
          <ol>
            <li><a href="<?= base_url(); ?>home/index">Home</a></li>
            <li>Pengumuman</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

          <?php foreach ($pengumuman as $pgmn) : ?>
            <article class="entry">

              <h2 class="entry-title">
                <a href="blog-single.html"><?= $pgmn['judul']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><?= $pgmn['tanggal_terbit']?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?= $pgmn['isi']; ?>
                </p>
                <div class="read-more">
                  <a href="<?= base_url(); ?>home/detail_pengumuman">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            <?php endforeach; ?>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="" method="post">
                  <input type="text" name="keyword">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Posts</h3>
              <div class="sidebar-item recent-posts">
                <?php foreach ($pengumuman as $pgmn) : ?>
                  <div class="post-item clearfix">
                    <img src="<?= base_url('assets/'); ?>img/blog/blog-recent-1.jpg" alt="">
                    <h4><a href="blog-single.html"><?= $pgmn['judul']; ?></a></h4>
                    <time datetime="2020-01-01"><?= $pgmn['tanggal_terbit']; ?></time>
                  </div>
                <?php endforeach; ?>
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->