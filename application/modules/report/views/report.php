  <main id="main">

  <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Report</h2>
        </div>

      </div>
    </section>
  <!-- End Breadcrumbs -->
  <section id="contact" class="contact">
    <div class="container">
      <?php if($this->session->flashdata('pesan') !== null): ?>
        <div class="alert alert-success"> 
          <?= $this->session->flashdata('pesan'); ?>
        </div>
      <?php endif;?>
      <h3><strong>Kontak Anda</strong></h3>
        <form method="post" action="<?php echo base_url()?>report/tambah_data">

          <div class="mb-4">
            <label for="nama" class="form-label">
              Nama : <span class="required">*</span>
            </label>
            <input type = "text" class="form-control" name="nama" class='nama' required="required" />
          </div>

          <div class="mb-4">
            <label for="alamat" class="form-label">
              Alamat : <span class="required">*</span>
            </label>
            <input type = "text" class="form-control" name="alamat" class='alamat' required="required" />
          </div>

          <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">
                Jenis Kelamin <span class="required">*</span>
            </label>
            <select  name="jenis_kelamin" class="form-select" aria-label="Default select example">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="mb-4">
            <label for="tgl_lahir" class="form-label"> 
              Tanggal Lahir : <span class="required">*</span>
            </label>
            <input type = "date" class="form-control" name="tgl_lahir" class='tgl_lahir' required="required" />
          </div>

          <div class="mb-4">
            <label for="no_hp" class="form-label"> 
              No hp (sebaiknya masukkan nomor WhatsApp) : <span class="required">*</span>
            </label>
            <input type = "text" class="form-control" name="no_hp" class='no_hp' required="required" />
          </div>

          <div class="mb-4">
            <label for="email" class="form-label"> 
              Email : <span class="required">*</span>
            </label>
            <input type = "email" class="form-control" name="email" class='email' required="required" />
          </div>

      <br>
      <h3><strong>Kronologi</strong></h3>

          <div class="mb-4">
            <label for="kronologi" class="form-label">Ceritakan apa yang terjadi secara ringkas dan jelas. Jelaskan bagaimana hal tersebut dapat terjadi serta beritahukan kepada kami siapa pelakunya.</label>
            <textarea type="text" name="kronologi" class="form-control" rows="5"></textarea>
          </div>

          <div class="mb-4">
            <label for="tindakan" class="form-label">Tindakan seperti apa yang Anda inginkan?</label>
            <div class="form-check">
              <input name="tindakan[]" id="tindakan" class="form-check-input" type="checkbox" value="beritahu dan lapor ke sekolah pelaku" id="flexCheckDefault">Beritahu dan lapor ke sekolah pelaku
            </div>
            <div class="form-check">
              <input name="tindakan[]" id="tindakan" class="form-check-input" type="checkbox" value="hapus status atau komentar yang berkaitan" id="flexCheckChecked">Hapus status atau komentar yang berkaitan
            </div>
            <div class="form-check">
              <input class="form-check-input" name="tindakan[]" type="checkbox" id="flexCheckChecked" />
              <input type="text" name="tindakan[]" id="tindakan" class="form-control" id="other" style="outline: 0; border-width: 0 0 1px" placeholder="Lainnya" />
            </div>
          </div>

      <br>    
      <h3><strong>Platform</strong></h3>

          <div class="mb-4">
            <label for="platform" class="form-label">Di platform mana anda mengalami cyberbullying?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Facebook" id="platform">Facebook
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Twitter" id="platform">Twitter
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Instagram" id="platform">Instagram
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Tiktok" id="platform">Tiktok
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Youtube" id="platform">Youtube
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Discord" id="platform">Discord
              </div>
          </div>

          <div class="mb-4">
            <label for="postingan_ada" class="form-label">Apakah postingan atau komentar yang mengandung cyberbullying tersebut masih ada?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="postingan_ada" value="Iya" id="postingan_ada">Iya
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="postingan_ada" value="Tidak" id="postingan_ada">Tidak
              </div>
          </div>

          <div class="mb-4">
            <label for="username_user" class="form-label"> Username Anda : <span class="required">*</span></label>
            <input type = "text" class="form-control" name="username_user" class='username_user' required="required">
          </div>

          <div class="mb-4">
            <label for="username_pelaku" class="form-label"> Username Pelaku : <span class="required">*</span></label>
            <input type = "text" class="form-control" name="username_pelaku" class='username_pelaku' required="required">
          </div>

          <div class="mb-4">
            <label for="link" class="form-label"> Link postingan atau komentar yang mengandung cyberbullying : <span class="required">*</span></label>
            <input type = "text" class="form-control" name="link" class='link' required="required">
          </div>

          <!-- <div class="mb-4">
             <label for="bukti" class="form-label w-100">Bukti:</label>
             <input type="file" name="bukti">
          </div> -->

          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-danger">Submit</button>
          </div>
        </form>
    </div>
  </section>