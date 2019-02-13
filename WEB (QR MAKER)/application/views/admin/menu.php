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

	<li id="dash_dashboard"><a class="waves-effect" href="<?= base_url('') ?>"><b>Dashboard</b></a></li>

	<ul class="collapsible" data-collapsible="accordion">
		<li id="dash_users">
			<div id="dash_users_header" class="collapsible-header waves-effect"><b>Users</b></div>
			<div id="dash_users_body" class="collapsible-body">
				<ul>
					<li id="users_seller">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Seller</a>
					</li>

					<li id="users_customer">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Customer</a>
					</li>
				</ul>
			</div>
		</li>

		<li id="dash_products">
			<div id="dash_products_header" class="collapsible-header waves-effect"><b>Products</b></div>
			<div id="dash_products_body" class="collapsible-body">
				<ul>
					<li id="products_product">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Products</a>
						<a class="waves-effect" style="text-decoration: none;" href="#!">Orders</a>
					</li>
				</ul>
			</div>
		</li>

		<li id="dash_categories">
			<div id="dash_categories_header" class="collapsible-header waves-effect"><b>Categories</b></div>
			<div id="dash_categories_body" class="collapsible-body">
				<ul>
					<li id="categories_category">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Category</a>
					</li>

					<li id="categories_sub_category">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
					</li>
				</ul>
			</div>
		</li>

		<li id="dash_brands">
			<div id="dash_brands_header" class="collapsible-header waves-effect"><b>Brands</b></div>
			<div id="dash_brands_body" class="collapsible-body">
				<ul>
					<li id="brands_brand">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Brand</a>
					</li>

					<li id="brands_sub_brand">
						<a class="waves-effect" style="text-decoration: none;" href="#!">Sub Brand</a>
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
</header>

<main>
	<div class="row">
		<div class="col s12">
			<div style="padding: 35px;" allign="center" class="card center">
				<div class="row">
					<div class="center card-title">
						<b>Data Menu</b>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<table class="highlight responsive-table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Menu</th>
									<th>Jenis Menu</th>
									<th>Harga</th>
									<th>Warung</th>
								</tr>
							</thead>

							<tbody>
							<?php $no = 1; ?>
							<?php foreach ($menu as $m ) : ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $m['nama_menu'] ?></td>
									<td><?= $m['jenis_menu'] ?></td>
									<td>Rp. <?= $m['harga'] ?></td>
									<td><?= $m['nama_penjual'] ?></td>
								</tr>
								<?php $no++; ?>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<footer class="indigo page-footer" style="position: fixed; width: 100%; bottom: 0;">
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