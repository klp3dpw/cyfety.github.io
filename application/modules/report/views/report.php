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
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  <strong>Kontak Anda</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <form method="post" action="<?php echo base_url()?>biodata/tambah_data">

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
                    <label for="umur" class="form-label"> 
                      Tanggal Lahir : <span class="required">*</span>
                    </label>
                    <input type = "date" class="form-control" name="umur" class='umur' required="required" />
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

                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button name="insert" value="insert" type="submit" class="btn btn-danger">
                    Lanjut </button>
                  </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  <strong>Kronologi</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <form method="post" action="<?php echo base_url()?>kronologi/tambah_data">
                    <div class="mb-4">
                      <label for="kronologi" class="form-label">Ceritakan apa yang terjadi secara ringkas dan jelas. Jelaskan bagaimana hal tersebut dapat terjadi serta beritahukan kepada kami siapa pelakunya.</label>
                      <textarea type="text" name="kronologi" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="mb-4">
                      <label for="tindakan" class="form-label">Tindakan seperti apa yang Anda inginkan?</label>
                      <div class="form-check"><input name="tindakan[]" id="tindakan" class="form-check-input" type="checkbox" value="beritahu dan lapor ke sekolah pelaku" id="flexCheckDefault" />Beritahu dan lapor ke sekolah pelaku</div>
                      <div class="form-check">
                        <input name="tindakan[]" id="tindakan" class="form-check-input" type="checkbox" value="hapus status atau komentar yang berkaitan" id="flexCheckChecked" />Hapus status atau komentar yang berkaitan
                        <!--<label for="tindakan" class="form-check-label" for="flexCheckChecked">
                    Hapus status atau komentar yang berkaitan
                    </label>-->
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="tindakan[]" type="checkbox" id="flexCheckChecked" />
                        <input type="text" name="tindakan[]" id="tindakan" class="form-control" id="other" style="outline: 0; border-width: 0 0 1px" placeholder="Lainnya" />
                      </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end"><button type="submit" name="insert" value="insert" class="btn btn-danger">Lanjut</button></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  <strong>Platform</strong>
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <form method="post" action="<?php echo base_url()?>platform/tambah_data">
                  <div class="mb-4">
                    <label for="platform" class="form-label">Dimana Anda Mengalami Pembullyan <span class="required">*</span></label>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="platform" required>
                    <label class="form-check-label" for="validationFormCheck3">Facebook</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="platform" required>
                    <label class="form-check-label" for="validationFormCheck3">Instagram</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="validationFormCheck3" name="platform" required>
                  <label class="form-check-label" for="validationFormCheck3">YouTube</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="validationFormCheck3" name="platform" required>
                  <label class="form-check-label" for="validationFormCheck3">Twitter</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="platform" required>
                    <label class="form-check-label" for="validationFormCheck3">Tik Tok</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="validationFormCheck3" name="platform" required>
                  <label class="form-check-label" for="validationFormCheck3">WeChat</label>
                </div>
                    <div class="form-check">
                <input type="radio" class="form-check-input" id="validationFormCheck3" name="platform" required>
                      <label for="platform" class="form-check-label" for="flexCheckChecked">
                      <input type="text" name="platform" class="form-control" id="other" style="outline:0; border-width:0 0 1px;" placeholder="Lainnya">
                      </label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="postingan_ada" class="form-label">Apakah postingan ataupun komentar yang mengandung cyberbullying tersebut masih ada? <span class="required">*</span></label>
                  <div class="form-check">
                  <input type="radio" class="form-check-input" id="validationFormCheck3" name="postingan_ada" required>
                  <label class="form-check-label" for="validationFormCheck3">Yes</label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="validationFormCheck3" name="postingan_ada" required>
                  <label class="form-check-label" for="validationFormCheck3">No</label>
                </div>
                </div>
                
                <div class="mb-4">
                <label for="username_user" class="form-label"> username anda : <span class="required">*</span></label>
                    <input type = "text" class="form-control" name="username_user" class='username_user' required="required" />
                  </div>
                  <div class="mb-4">
                    <label for="sername_pelaku" class="form-label"> username pelaku : <span class="required">*</span></label>
                    <input type = "text" class="form-control" name="sername_pelaku" class='sername_pelaku' required="required" />
                  </div>
                  <div class="mb-4">
                    <label for="link" class="form-label"> Link postingan atau komentar yang mengandung cyberbullying : <span class="required">*</span></label>
                    <input type = "text" class="form-control" name="link" class='link' required="required" />
                  </div>
                  <div class="mb-4">
                    <label for="tindakan" class="form-label">File Upload (screenshots postingan atau komentar yang mengandung cyberbullying)</label>
                   <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile"></label>
                  </div>
                  </div>
                  
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end"><button type="submit" name="insert" value="insert" class="btn btn-danger">Lanjut</button></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>