<div class="container" style="margin-top: 10vh">
	<table class="highlight responsive-table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Nama Menu</th>
				<th>Jumlah</th>
				<th>Tanggal Pesan</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($transaksi as $t ) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $t['nama'] ?></td>
				<td><?= $t['nama_menu'] ?></td>
				<td><?= $t['qty'] ?></td>
				<td><?= $t['created_at'] ?></td>
				<?php if ($t['status'] == 1) : ?>
					<td>TERBAYAR</td>
					<?php else: ?>
					<td>NGUTANG</td>
				<?php endif; ?>
			</tr>
			<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
