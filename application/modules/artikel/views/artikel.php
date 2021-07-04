  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <?php foreach($populer as $pop): ?>
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url('assets/thumbnail/'.$pop->gambar) ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= base_url('artikel/'.$pop->slug) ?>"><?= $pop->judul ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                      href="<?= base_url('artikel/'.$pop->slug) ?>">Dian</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                      href="<?= base_url('artikel/'.$pop->slug) ?>"><?= $pop->tanggal ?></a></li>
                </ul>
              </div>

              <div class="entry-content">

                <?= word_limiter($pop->isi, 30); ?>

                <div class="read-more">
                  <a href="<?= base_url('artikel/'.$pop->slug) ?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            <?php endforeach; ?>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Recent Posts</h3>
              <?php foreach($terbaru as $baru): ?>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/thumbnail/'.$baru->gambar) ?>" alt="">
                  <h4><a href="<?= base_url('artikel/'.$baru->slug) ?>"><?= $baru->judul ?></a></h4>
                  <time><?= $baru->tanggal ?></time>
                </div>
              </div><!-- End sidebar recent posts-->
              <?php endforeach; ?>
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->