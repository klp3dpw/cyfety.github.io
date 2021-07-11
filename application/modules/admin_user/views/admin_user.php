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

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar User</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                      Tambah User
                    </button><br><br>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach($user as $us): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $us->name ?></td>
                        <td><?= $us->email ?></td>
                        <td>
                          <a onclick='return confirm("Yakin ingin menghapus user tersebut?")' class="btn btn-danger"
                            href="<?= base_url('admin_user/hapus_user/'.$us->id) ?>">Hapus</a>
                          <!--<a class="btn btn-warning" href="<?= base_url('ke_edit/artikel/'.$art->id) ?>">Edit</a>-->
                          <a class="btn btn-warning" href="<?= base_url('admin_artikel/edit_art/'.$us->id) ?>">Edit</a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <?= form_open('admin_user/tambah_data'); ?>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <div class="form-group">
                  <label>Username</label>
                    <input name="name" type="text" class="form-control" placeholder="Username">
                </div>

                <div class="form-group">
                  <label>Email</label>
                    <input name="email" type="text" class="form-control"
                      placeholder="Email">
                </div>

                <div class="form-group">
                  <label>Password</label>
                    <input name="password" type="password" class="form-control"
                      placeholder="Password">
                </div>
              </div> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Tambah User</button>
            </div>
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url()?>assets_admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url()?>assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js">
  </script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
  </script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url()?>assets_admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url()?>assets_admin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url()?>assets_admin/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>
