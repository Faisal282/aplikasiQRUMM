<div class="container" style="margin-top: 10vh">
	<table class="highlight responsive-table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Nama Menu</th>
				<th>Jumlah</th>
				<th>Tanggal Pesan</th>
			</tr>
		</thead>

		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($utang as $u ) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $u['nama'] ?></td>
				<td><?= $u['nama_menu'] ?></td>
				<td><?= $u['qty'] ?></td>
				<td><?= $u['created_at'] ?></td>
			</tr>
			<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
