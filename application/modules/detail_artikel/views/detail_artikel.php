  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?= base_url('assets/thumbnail/'.$isi->gambar) ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href=""><?= $isi->judul ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Dian</a>
                  </li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                      href="blog-single.html"><?= $isi->tanggal ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                      href="blog-single.html"><?= $isi->dilihat ?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <?= $isi->isi ?>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->