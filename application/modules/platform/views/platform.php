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
					<label for="platform" class="form-label">Dimana Anda Mengalami Pembullyan</label>
					<div class="form-check">
						<input name="platform" class="form-check-input" type="checkbox" value="facebook"
							id="flexCheckDefault">
						<label for="platform" class="form-check-label" for="flexCheckDefault">
							Facebook
						</label>
					</div>
					<div class="form-check">
						<input name="platform" class="form-check-input" type="checkbox" value="instagram"
							id="flexCheckChecked">
						<label for="platform" class="form-check-label" for="flexCheckChecked">
							Instagram
						</label>
					</div>
					<div class="form-check">
						<input name="platform" class="form-check-input" type="checkbox" value="youtube"
							id="flexCheckChecked">
						<label for="platform" class="form-check-label" for="flexCheckChecked">
							YouTube
						</label>
					</div>
					<div class="form-check">
						<input name="platform" class="form-check-input" type="checkbox" value="twitter"
							id="flexCheckChecked">
						<label for="platform" class="form-check-label" for="flexCheckChecked">
							Twitter
						</label>
					</div>
					<div class="form-check">
						<input name="platform" class="form-check-input" type="checkbox" value="tik tok"
							id="flexCheckChecked">
						<label for="platform" class="form-check-label" for="flexCheckChecked">
							Tik Tok
						</label>
					</div>
					<div class="form-check">
						<input name="platform" class="form-check-input" type="checkbox" value="wechat"
							id="flexCheckChecked">
						<label for="platform" class="form-check-label" for="flexCheckChecked">
							WeChat
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" name="tindakan" type="checkbox" id="flexCheckChecked">
						<label for="platform" class="form-check-label" for="flexCheckChecked">
							<input type="text" name="platform" class="form-control" id="other"
								style="outline:0; border-width:0 0 1px;" placeholder="Lainnya">
						</label>
					</div>
				</div>
				<div class="mb-4">
					<label for="postingan_ada" class="form-label">Apakah postingan ataupun komentar yang mengandung
						cyberbullying tersebut masih ada?</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="postingan_ada" id="flexRadioDefault1">Yes
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="postingan_ada" id="flexRadioDefault1">No
					</div>
				</div>
				<div class="mb-4">
					<label for="username_user" class="form-label">username anda:</label>
					<input type="text" name="username_user" class="form-control">
				</div>
				<div class="mb-4">
					<label for="username_pelaku" class="form-label">username pelaku:</label>
					<input type="text" name="username_pelaku" class="form-control">
				</div>
				<div class="mb-4">
					<label for="link" class="form-label">Link postingan atau komentar yang mengandung
						cyberbullying:</label>
					<input type="text" name="link" class="form-control">
				</div>
				<div class="mb-4">
					<label for="tindakan" class="form-label">File Upload (screenshots postingan atau komentar yang
						mengandung cyberbullying)</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="validatedCustomFile" required>
						<label class="custom-file-label" for="validatedCustomFile"></label>
					</div>
				</div>

				<div class="d-grid gap-2 d-md-flex justify-content-md-end"><button type="submit" name="insert"
						value="insert" class="btn btn-danger">Lanjut</button></div>
			</form>
		</div>
	</section>
	<!-- ======= End platform Section ======= -->
</main>