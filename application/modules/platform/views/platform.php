<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Platform</h2>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Biodata Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <form method="post" action="<?= base_url('platform/tambah_data'); ?>" enctype="multipart/form-data">
        
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
<!-- 						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Youtube" id="platform">
						  <input type="text" name="platform" id="plarform" class="form-control" id="other" style="outline: 0; border-width: 0 0 1px" placeholder="Lainnya">
						</div> -->
        </div>
<!--         <div class="mb-4">
          <label for="plartform" class="form-label">Di platform mana anda mengalami cyberbullying?</label>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Facebook" id="platform">Facebook
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Instagram" id="platform">Instagram
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Twitter" id="platform">Twitter
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Line" id="platform">Line
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Tiktok" id="platform">Tiktok
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Youtube" id="platform">Youtube
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="platform" value="Youtube" id="platform">
						  <input type="text" name="platform" id="plarform" class="form-control" id="other" style="outline: 0; border-width: 0 0 1px" placeholder="Lainnya">
						</div>
        </div> -->
        
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

				<div class="mb-4">
           <label for="bukti" class="form-label w-100">Bukti</label>
           <input type="file" name="bukti">
				</div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end"><button type="submit" name="insert" value="insert" class="btn btn-danger">Submit</button></div>
      </form>
    </div>
  </section>
  <!-- ======= End Biodata Section ======= -->
</main>