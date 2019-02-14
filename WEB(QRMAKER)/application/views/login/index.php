<div class="container">
	<div class="box"></div>
	<div class="container-forms">
		<div class="container-info">
			<div class="info-item">
				<div class="table">
					<div class="table-cell">
						<p>Have an account? </p>
						<div class="btn">Log in </div>
					</div>
				</div>
			</div>
			<div class="info-item">
				<div class="table">
					<div class="table-cell"><a class="box-item" href="http://www.wadahsukses.com"><img src="<?= base_url('assets/img/logo.png') ?>"
							 id="logo"></a>
						<p>Don't have an account?
						</p>
						<div class="btn">Sign up </div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-form">
			<form action="" method="POST">
				<div class="form-item log-in">
					<div class="table">
						<div class="table-cell">
							<input name="email" placeholder="Email" type="email">
							<input name="password" placeholder="Password" type="password">
							<div class="btn" id="login">Log in</div>
							<!-- <button type="submit" class="btn"></button> -->
						</div>
					</div>
				</div>
			</form>
			<form action="<?= base_url('Login/register') ?>" method="POST">
				<div class="form-item sign-up">
					<div class="table">
						<div class="table-cell">
							<input type="text" name="nama" placeholder="nama">
							<!-- <input type="text" name="kelas" placeholder="kelas"> -->
							<select name="kelas" id="kelas">
							<option value=""> <===== PILIH KELAS =====> </option>
							<?php foreach ($kelas as $k ) : ?>
								<option value="<?= $k['id_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
							<?php endforeach; ?>
							</select>
							<input type="text" name="telp" placeholder="telp">
							<input type="email" name="email" placeholder="email">
							<input type="password" name="password" placeholder="password">
							<div class="btn" id="register">Register</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>