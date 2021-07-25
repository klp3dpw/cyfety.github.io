
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
                  <h3 class="card-title">Daftar Report</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <a href="<?= base_url ('tambah_report'); ?>" class="btn btn-primary">Tambah Report</a><br><br>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>No Hp</th>
						<th>Email</th>
						<th>Kronologi</th>
						<th>Tindakan</th>
						<th>Platform</th>
						<th>Postingan Ada</th>
						<th>Username User</th>
						<th>Username Pelaku</th>
						<th>Link</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; foreach($report as $rep): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $rep->nama ?></td>
                        <td><?= $rep->alamat ?></td>
						<td><?=$rep->jenis_kelamin ?></td>
						<td><?= $rep->tgl_lahir ?></td>
						<td><?= $rep->no_hp ?></td>
						<td><?= $rep->email ?></td>
						<td><?= $rep->kronologi ?></td>
						<td><?= $rep->tindakan ?></td>
						<td><?= $rep->platform ?></td>
						<td><?= $rep->postingan_ada ?></td>
						<td><?= $rep->username_user ?></td>
						<td><?= $rep->username_pelaku ?></td>
						<td><?= $rep->link ?></td>
                        <td>
                          <a onclick='return confirm("Yakin ingin menghapus report tersebut?")' class="btn btn-danger"
                            href="<?= base_url('admin_report/hapus_report/'.$rep->id) ?>">Hapus</a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>No Hp</th>
						<th>Email</th>
						<th>Kronogi</th>
						<th>Tindakan</th>
						<th>Platform</th>
						<th>Postingan Ada</th>
						<th>Username User</th>
						<th>Username Pelaku</th>
						<th>Link</th>
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
    </div>
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
