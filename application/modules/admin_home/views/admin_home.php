    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

      <section class="content">
        <div class="container-fluid">
          <!-- Small Box (Stat card) -->
          <div class="row">
            <div class="col-lg-4 col-6">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Artikel</h3>
                </div>
                <a href="<?= base_url('admin_artikel') ?>" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>User</h3>
                </div>
                <a href="<?= base_url('admin_user') ?>" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small card -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>Report</h3>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
