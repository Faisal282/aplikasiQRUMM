<div class="container" style="margin-top: 10vh">
	<table class="highlight responsive-table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Menu</th>
				<th>Jenis Makanan</th>
				<th>Harga</th>
			</tr>
		</thead>

		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($menu as $m ) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $m['nama_menu'] ?></td>
				<td><?= $m['jenis_menu'] ?></td>
				<td><?= $m['harga'] ?></td>
			</tr>
			<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
