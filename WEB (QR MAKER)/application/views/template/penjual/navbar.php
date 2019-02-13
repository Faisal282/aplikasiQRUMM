<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?= base_url('Login/logout') ?>">LOGOUT</a></li>
  <li><a href="<?= base_url('Login/profil') ?>">PROFIL</a></li>
  <li><a href="">three</a></li>
</ul>
<nav class="navbar-fixed indigo">
	<div class="nav-wrapper">
		<a href="" class="brand-logo">Logo</a>
		<a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="<?= base_url('') ?>">Home</a></li>
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?= $_SESSION['nama'] ?><i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
	</div>
</nav>

<ul class="sidenav" id="mobile-demo">
	<li><a href="sass.html">Sass</a></li>
	<li><a href="badges.html">Components</a></li>
	<li><a href="collapsible.html">Javascript</a></li>
	<li><a href="mobile.html">Mobile</a></li>
	<li><a href="<?= base_url('Login/logout') ?>">LOGOUT</a></li>
</ul>
