<div class="container">
	<table id="tablee" class="display">
		<thead>
			<tr>
				<th>No.</th>
				<th>menu</th>
				<th>kat</th>
				<th>harga</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($sql as $key) { ?>
			<tr>
				<td><?php echo $key->id_menu; ?></td>
				<td><?php echo $key->nama_menu; ?></td>
				<td><?php echo $key->kategori; ?></td>
				<td><?php echo $key->harga; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

