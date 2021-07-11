  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Artikel</h1>
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

              <form action="<?= base_url('admin_artikel/update/'.$artikel->id); ?>">
                <!--<form method="post" action="<?= base_url('admin_artikel/update'); ?>" enctype="multipart/form-data">-->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input name="judul" type="text" class="form-control" id="exampleInputEmail1"
                      placeholder="Judul Artikel" value="<?= $artikel->judul ?>">
                  </div>
                  <div class="form-group">
                    <label>Slug</label>
                    <input name="slug" type="text" class="form-control" placeholder="Slug Artikel"
                      value="<?= $artikel->slug ?>">
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-3">
                      <label class="form-label w-100">Thumbnail Sekarang</label>
                      <img src="<?= base_url('assets/thumbnail/'.$artikel->gambar) ?>" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <label class="form-label w-100">Thumbnail</label>
                        <input type="file" name="gambar">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Artikel</label>
                    <textarea name="isi" id="ckeditor" cols="30" rows="10" <?= $artikel->isi ?>></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->