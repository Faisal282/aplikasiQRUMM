<div class="container">
	<div class="row" style="margin-top: 13vh;">
		<div class="col s6 offset-s3 m">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="<?= base_url('assets/img/ucup.JPG') ?>">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">
						<?= $_SESSION['nama'] ?><i class="material-icons right">more_vert</i></span>
					<p><a href="#">INSTAGRAM</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title red-text text-lighten-1">
						<?= $_SESSION['nama'] ?><i class="material-icons right">close</i></span>
					<div class="row">
						<form class="col s12">
							<div class="row" style="margin-top: 3vh;">
								<div class="input-field col s12">
									<input disabled value="<?= $_SESSION['kelas'] ?>" id="disabled" type="text" class="validate" style="text-transform: uppercase;">
									<label for="disabled" class="red-text text-darken-1">KELAS</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input disabled value="<?= $_SESSION['email'] ?>" id="disabled" type="text" class="validate" style="text-transform: uppercase;">
									<label for="disabled" class="red-text text-darken-1">EMAIL</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input disabled value="<?= $_SESSION['telp'] ?>" id="disabled" type="text" class="validate" style="text-transform: uppercase;">
									<label for="disabled" class="red-text text-darken-1">TELEPON</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s3 offset-s5">
			<a class="waves-effect waves-light btn-large" href="<?= base_url('home') ?>"><i class="material-icons right">arrow_back</i>KEMBALI</a>

		</div>
	</div>
</div>
