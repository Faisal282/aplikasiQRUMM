<!-- TAMPILAN ADMIN SUPERUSER -->
<?php if ($_SESSION['role'] == 2) : ?>
<div class="preloader-background">
	<div class="preloader-wrapper big active">
		<div class="spinner-layer spinner-blue-only">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>
	</div>
</div>
<ul id="slide-out" class="side-nav fixed z-depth-2">
	<li class="center no-padding">
		<div class="indigo darken-2 white-text" style="height: 180px;">
			<div class="row">
				<img style="margin-top: 5%;" width="150" height="150" src="<?= base_url('assets/img/logo.png') ?>" class="circle responsive-img" />

				<p style="margin-top: -13%;">
					Wadah Sukses
				</p>
			</div>
		</div>
	</li>

	<li id="dash_dashboard"><a class="waves-effect" href="#!"><b>Dashboard</b></a></li>

	<ul class="collapsible" data-collapsible="accordion">
		<li id="dash_users">
			<div id="dash_users_header" class="collapsible-header waves-effect"><b>Manajemen User</b></div>
			<div id="dash_users_body" class="collapsible-body">
				<ul>
					<li id="users_seller">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Penjual</a>
					</li>

					<li id="users_customer">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Pelanggan</a>
					</li>
				</ul>
			</div>
		</li>

		<li id="dash_products">
			<div id="dash_products_header" class="collapsible-header waves-effect"><b>Manajemen Produk</b></div>
			<div id="dash_products_body" class="collapsible-body">
				<ul>
					<li id="products_product">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Menu</a>
						<a class="waves-effect" style="text-decoration: none;" href="#!">Nota</a>
					</li>
				</ul>
			</div>
		</li>

	</ul>
</ul>

<header>
	<ul class="dropdown-content" id="user_dropdown">
		<li><a class="indigo-text" href="<?= base_url('Login/profil') ?>">Profile</a></li>
		<li><a class="indigo-text" href="<?= base_url('Login/logout') ?>">Logout</a></li>
	</ul>

	<nav class="indigo" role="navigation">
		<div class="nav-wrapper">
			<a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img style="margin-top: 17px; margin-left: 5px;"
				 src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>

			<ul class="right hide-on-med-and-down">
				<li>
					<?= $_SESSION['nama'] ?>
					<a class='right dropdown-button' data-activates='user_dropdown'>
						<i class='material-icons'>account_circle</i>
					</a>
				</li>
			</ul>

			<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		</div>
	</nav>

	<nav>
		<div class="nav-wrapper indigo darken-2">
			<a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
			<a class="breadcrumb" href="#!">Index</a>

			<div style="margin-right: 20px;" id="timestamp" class="right"></div>
		</div>
	</nav>
</header>

<main>
	<div class="row">
		<div class="col s6">
			<div style="padding: 35px;" align="center" class="card">
				<div class="row">
					<div class="left card-title">
						<b>Manajemen User</b>
					</div>
				</div>

				<div class="row">
					<a href="<?= base_url('admin/penjual') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">person</i>
							<span class="indigo-text text-lighten-1">
								<h5>Penjual</h5>
							</span>
						</div>
					</a>
					<div class="col s1">&nbsp;</div>
					<div class="col s1">&nbsp;</div>

					<a href="<?= base_url('Admin/pelanggan') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">people</i>
							<span class="indigo-text text-lighten-1">
								<h5>Pelanggan</h5>
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="col s6">
			<div style="padding: 35px;" align="center" class="card">
				<div class="row">
					<div class="left card-title">
						<b>Manajemen Produk</b>
					</div>
				</div>
				<div class="row">
					<a href="<?= base_url('Admin/menu') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">store</i>
							<span class="indigo-text text-lighten-1">
								<h5>Menu</h5>
							</span>
						</div>
					</a>

					<div class="col s1">&nbsp;</div>
					<div class="col s1">&nbsp;</div>

					<a href="<?= base_url('Admin/nota') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">assignment</i>
							<span class="indigo-text text-lighten-1">
								<h5>Nota</h5>
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large pink waves-effect waves-light">
			<i class="large material-icons">add</i>
		</a>

		<ul>
			<li>
				<a class="btn-floating red"><i class="material-icons">note_add</i></a>
				<a href="" class="btn-floating fab-tip">Add a note</a>
			</li>

			<li>
				<a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
				<a href="" class="btn-floating fab-tip">Add a photo</a>
			</li>

			<li>
				<a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
				<a href="" class="btn-floating fab-tip">Add an alarm</a>
			</li>

			<li>
				<a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
				<a href="" class="btn-floating fab-tip">Add a master password</a>
			</li>
		</ul>
	</div>
</main>

<footer class="indigo page-footer">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h5 class="white-text">Icon Credits</h5>
				<ul id='credits'>
					<li>
						Gif Logo made using <a href="https://formtypemaker.appspot.com/" title="Form Type Maker">Form Type Maker</a> from
						<a href="https://github.com/romannurik/FORMTypeMaker" title="romannurik">romannurik</a>
					</li>
					<li>
						Icons made by <a href="https://material.io/icons/">Google</a>, available under <a href="https://www.apache.org/licenses/LICENSE-2.0"
						 target="_blank">Apache License Version 2.0</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<span>Made By <a style='font-weight: bold;' href="https://www.wadahsukses.com" target="_blank">WADAHSUKSES</a></span>
		</div>
	</div>
</footer>
<?php endif; ?>

<!-- TAMPILAN PENJUAL -->
<?php if ($_SESSION['role'] == 1) : ?>
<ul id="slide-out" class="sidenav sidenav-fixed">
	<li>
		<div class="user-view">
			<div class="background">
				<img src="images/office.jpg" alt="hallo">
			</div>
			<a href="#user"><img class="circle" src="images/yuna.jpg" alt="hallo"></a>
			<a href="#name"><span class="white-text name">John Doe</span></a>
			<a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
		</div>
	</li>
	<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
	<li><a href="#!">Second Link</a></li>
	<li>
		<div class="divider"></div>
	</li>
	<li><a class="subheader">Subheader</a></li>
	<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<main>
	<div class="row" style="margin-top: 3.5vh;">
		<div class="col s6">
			<div style="padding: 35px;" align="center" class="card">
				<div class="row">
					<div class="center card-title">
						<b>Daftar Pesanan</b>
					</div>
				</div>

				<div class="row">
					<a href="<?= base_url('penjual/orderan') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">event_note</i>
							<span class="indigo-text text-lighten-1">
								<h5>Orderan</h5>
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="col s6">
			<div style="padding: 35px;" align="center" class="card">
				<div class="row">
					<div class="center card-title">
						<b>Manajemen Produk</b>
					</div>
				</div>
				<div class="row">
					<a href="<?= base_url('penjual/menu') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">restaurant_menu</i>
							<span class="indigo-text text-lighten-1">
								<h5>Menu</h5>
							</span>
						</div>
					</a>

					<div class="col s1">&nbsp;</div>
					<div class="col s1">&nbsp;</div>

					<a href="<?= base_url('penjual/transaksi') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">assignment</i>
							<span class="indigo-text text-lighten-1">
								<h5>Transaksi</h5>
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 3.5vh;">
		<div class="col s6">
			<div style="padding: 35px;" align="center" class="card">
				<div class="row">
					<div class="center card-title">
						<b>Manajemen Keuangan</b>
					</div>
				</div>

				<div class="row">
					<a href="<?= base_url('penjual/utang') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">money_off</i>
							<span class="indigo-text text-lighten-1">
								<h5>Utang</h5>
							</span>
						</div>
					</a>
					<div class="col s1">&nbsp;</div>
					<div class="col s1">&nbsp;</div>

					<a href="<?= base_url('penjual/bayar') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">attach_money</i>
							<span class="indigo-text text-lighten-1">
								<h5>Bayar</h5>
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</main>
<footer class="indigo page-footer">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h5 class="white-text">Icon Credits</h5>
				<ul id='credits'>
					<li>
						Gif Logo made using <a href="https://formtypemaker.appspot.com/" title="Form Type Maker">Form Type Maker</a> from
						<a href="https://github.com/romannurik/FORMTypeMaker" title="romannurik">romannurik</a>
					</li>
					<li>
						Icons made by <a href="https://material.io/icons/">Google</a>, available under <a href="https://www.apache.org/licenses/LICENSE-2.0"
						 target="_blank">Apache License Version 2.0</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<span>Made By <a style='font-weight: bold;' href="https://www.wadahsukses.com" target="_blank">WADAHSUKSES</a></span>
		</div>
	</div>
</footer>
<?php endif; ?>

<!-- TAMPILAN PELANGGAN -->
<?php if ($_SESSION['role'] == 0) : ?>
<ul id="slide-out" class="sidenav navatas">
	<li>
		<div class="user-view">
			<div class="background">
				<img src="images/office.jpg" alt="hallo">
			</div>
			<a href="#user"><img class="circle" src="images/yuna.jpg" alt="hallo"></a>
			<a href="#name"><span class="white-text name">John Doe</span></a>
			<a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
		</div>
	</li>
	<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
	<li><a href="#!">Second Link</a></li>
	<li>
		<div class="divider"></div>
	</li>
	<li><a class="subheader">Subheader</a></li>
	<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<main>
	<div class="row" style="margin-top: 15vh;">
		<div class="col s5">
			<div style="padding: 35px;" align="center" class="card">
				<div class="row">
					<a href="<?= base_url('pelanggan/bayar') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s12 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">attach_money</i>
							<span class="indigo-text text-lighten-1">
								<h5>Bayar</h5>
							</span>
						</div>
					</a>
					<div class="col s1">&nbsp;</div>
					<div class="col s1">&nbsp;</div>
				</div>
			</div>
		</div>
		<div class="col s2">
			<div style="padding: 35px 20px;" align="center" class="card">
				<div class="row">
					<a href="<?= base_url('pelanggan/scan') ?>">
						<div style="padding: 20px;" class="grey lighten-3 col s12 waves-effect hoverable">
							<span class="fas fa-qrcode" style="font-size: 17vh;"></span>
							<span class="indigo-text text-lighten-1">
								<h5>SCAN</h5>
							</span>
						</div>
					</a>
					<div class="col s1">&nbsp;</div>
					<div class="col s1">&nbsp;</div>
				</div>
			</div>
		</div>

		<div class="col s5">
			<div style="padding: 35px;" align="center" class="card">
				<div class="row">
					<a href="<?= base_url('pelanggan/utang') ?>">
						<div style="padding: 30px;" class="grey lighten-3 col s12 waves-effect hoverable">
							<i class="indigo-text text-lighten-1 large material-icons">money_off</i>
							<span class="indigo-text text-lighten-1">
								<h5>Utang</h5>
							</span>
						</div>
					</a>
					<div class="col s1">&nbsp;</div>
					<div class="col s1">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large pink waves-effect waves-light">
			<i class="large material-icons">add</i>
		</a>

		<ul>
			<li>
				<a class="btn-floating red"><i class="material-icons">note_add</i></a>
				<a href="" class="btn-floating fab-tip">Add a note</a>
			</li>

			<li>
				<a class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
				<a href="" class="btn-floating fab-tip">Add a photo</a>
			</li>

			<li>
				<a class="btn-floating green"><i class="material-icons">alarm_add</i></a>
				<a href="" class="btn-floating fab-tip">Add an alarm</a>
			</li>

			<li>
				<a class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
				<a href="" class="btn-floating fab-tip">Add a master password</a>
			</li>
		</ul>
	</div>
</main>

<?php endif; ?>
