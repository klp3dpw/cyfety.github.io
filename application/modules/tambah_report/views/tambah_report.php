<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form method="post" action="<?= base_url('tambah_report/tambah_data'); ?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama">
                  </div>
			
                  <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                  </div>
				
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select  name="jenis_kelamin" class="form-control">
					<option value="">- pilih -</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
					</select>
                  </div>
				
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" placeholder="tanggal_lahir">
                  </div>
			
                  <div class="form-group">
                    <label>No Hp</label>
                    <input name="no_hp" type="text" class="form-control" placeholder="no_hp">
                      
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Email">
                  </div>
				<div class="form-group">
                    <label>Kronologi</label>
                    <textarea type="text" name="kronologi" class="form-control" cols="150" rows="10"></textarea>
                  </div>
				  
                  <div class="form-group">
				  <label> Tindakan seperti apa yang Anda inginkan?</label>
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
            
			<div class="form-group">
            <label>Di platform mana anda mengalami cyberbullying?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Facebook" >Facebook
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Twitter">Twitter
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Instagram" >Instagram
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Tiktok" >Tiktok
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Youtube" id="platform">Youtube
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="platform" value="Discord" id="platform">Discord
              </div>
          </div>

          <div class="mb-4">
            <label>Apakah postingan atau komentar yang mengandung cyberbullying tersebut masih ada?</label>
             <div class="form-check">
                <input class="form-check-input" type="radio" name="postingan_ada" value="Iya" id="postingan_ada">Iya
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="postingan_ada" value="Tidak" id="postingan_ada">Tidak
              </div>
           </div>
			  <div class="form-group">
                    <label>Username Anda</label>
                    <input name="username_user" type="text" class="form-control" placeholder="Username Anda">
                  </div>
			   <div class="form-group">
                    <label>Username Pelaku</label>
                    <input name="username_pelaku" type="text" class="form-control" placeholder="Username Pelaku" >
                  </div>
				  <div class="form-group">
				  <label for="link" class="form-label"> Link postingan atau komentar yang mengandung cyberbullying </label>
				<input type = "text" class="form-control" name="link" placeholder="link" >
			</div>
			  </div>
                <!-- /.card-body -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->