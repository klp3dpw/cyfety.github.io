    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <?php $no = 0; foreach($random as $ran): ?>

          <?php
          if($no === 0):
            $active = 'active';
          else:
            $active = '';
          endif;
          $no++;
          ?>
          
          <div class="carousel-item <?= $active ?>">
            <img src="<?= base_url('assets/thumbnail/'.$ran->gambar) ?>" class="d-block w-100" alt="">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"><?= $ran->judul ?></span></h2>
                <p class="animate__animated animate__fadeInUp">
                  <?= word_limiter($ran->isi, 20); ?>
                </p>
                <a href="<?= base_url('artikel/'.$ran->slug) ?>"
                  class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Artikel 2 ======= -->
      <section id="services" class="services">
        <div class="container">
          <?php foreach($populer_home as $ph): ?>
          <div class="back">
            <div class="row">
              <div class="col-lg-6" style="text-align: center">
                <img src="<?= base_url('assets/thumbnail/'.$ph->gambar) ?>" width="90%" class="img-fluid" alt="" />
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <h3><strong><?= $ph->judul ?></strong></h3>
                <?= word_limiter($ph->isi, 60); ?>
                <br><br>
                <a href="<?= base_url('artikel/'.$ph->slug) ?>" class="button">Read More...</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
      <!-- End Artikel 2 Section -->
    </main> <!-- End #main -->