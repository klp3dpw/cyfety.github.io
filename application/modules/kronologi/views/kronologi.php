<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Kronologi</h2>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Biodata Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
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
  </section>
  <!-- ======= End Biodata Section ======= -->
</main>