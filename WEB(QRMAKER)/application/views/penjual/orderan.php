<div class="container" style="margin-top: 10vh">
	<div class="row">
		<div class="col s12 text-center">
			<!-- <input type="text" id="search" placeholder="Type to search..." /> -->
			<table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable">
				<thead>
					<tr>
						<th>NO</th>
						<th>Nama Pelanggan</th>
						<th>Nama Menu</th>
						<th>Jumlah</th>
						<th>Beli Jam</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach ($orderan as $u ) : ?>
						<tr>
							<td>
								<?= $no ?>
							</td>
							<td>
								<?= $u['nama'] ?>
							</td>
							<td>
								<?= $u['nama_menu'] ?>
							</td>
							<td>
								<?= $u['qty'] ?>
							</td>
							<td>
								<?= $u['created_at'] ?>
							</td>
							<td>
								<a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons" 
								onclick="window.location.href='clearPelangganUtang/<?= $u['id_nota'] ?>'">check</i></a>
							</td>
						</tr>
					<?php $no++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
			<div class="col-md-12 center text-center">
				<span class="left" id="total_reg"></span>
				<ul class="pagination pager" id="myPager"></ul>
			</div>
		</div>
	</div>
</div>
