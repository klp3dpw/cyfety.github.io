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
			<label for="nama" class="form-label"> Nama : <span class="required">*</span></label>
			<input type = "text" class="form-control" name="nama" class='nama' required="required" />
		</div>
		<div class="mb-4">
			<label for="alamat" class="form-label"> Alamat : <span class="required">*</span></label>
			<input type = "text" class="form-control" name="alamat" class='alamat' required="required" />
		</div>
		<div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="required">*</span></label>
          <select  name="jenis_kelamin" class="form-select" aria-label="Default select example">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
		<div class="mb-4">
			<label for="umur" class="form-label"> Tanggal Lahir : <span class="required">*</span></label>
			<input type = "date" class="form-control" name="umur" class='umur' required="required" />
		</div>
		<div class="mb-4">
			<label for="no_hp" class="form-label"> No hp (sebaiknya masukkan nomor WhatsApp) : <span class="required">*</span></label>
			<input type = "text" class="form-control" name="no_hp" class='no_hp' required="required" />
		</div>
		<div class="mb-4">
		<label for="email" class="form-label"> Email : <span class="required">*</span></label>

		<input type = "email" class="form-control" name="email" class='email' required="required" />
		</div>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end"><button name="insert" value="insert" type="submit" class="btn btn-danger">Lanjut</button></div>
		</form>
      </div>
	  </section>
	<!-- ======= End Biodata Section ======= -->
