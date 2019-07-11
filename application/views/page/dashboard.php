<div class="container">
	<table>
		<thead>
			<tr>
				<th>header</th>
				<th>header</th>
				<th>header</th>
				<th>header</th>
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