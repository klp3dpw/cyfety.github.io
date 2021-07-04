 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Platform Kejadian</h2>
        </div>

      </div>
    </section>
	<!-- End Breadcrumbs -->

    <!-- ======= plafform Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
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
	  </section>
	<!-- ======= End platform Section ======= -->