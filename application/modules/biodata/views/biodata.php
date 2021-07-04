<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Kontak Anda</h2>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Biodata Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <form method="post" action="<?php echo base_url()?>biodata/tambah_data">
        <div class="mb-4">
          <label for="nama" class="form-label">Nama:</label>
          <input type="text" name="nama" class="form-control" />
        </div>
        <div class="mb-4">
          <label for="alamat" class="form-label">Alamat:</label>
          <input type="text" name="alamat" class="form-control" />
        </div>
        <div class="mb-4">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
          <input type="text" class="form-control" name="jenis_kelamin" />
        </div>
        <div class="mb-4">
          <label for="umur" class="form-label">Umur:</label>
          <input type="text" class="form-control" name="umur" />
        </div>
        <div class="mb-4">
          <label for="no_hp" class="form-label">No hp:</label>
          <input type="text" class="form-control" name="no_hp" />
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email:</label>
          <input type="text" class="form-control" name="email" />
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button name="insert" value="insert" type="submit" class="btn btn-danger">Lanjut</button>
        </div>
      </form>
    </div>
  </section>
  <!-- ======= End Biodata Section ======= -->
</main>
