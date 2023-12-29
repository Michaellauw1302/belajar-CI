<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<?= anchor('crud/input', 'Tambah Data'); ?>

<body>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php foreach ($user as $u) { ?>
			<tr>
				<td><?= $u->nama; ?></td>
				<td><?= $u->alamat; ?></td>
				<td><?= $u->pekerjaan; ?></td>
				<td>
					<?= anchor('crud/ambil_data_edit/' . $u->id, 'Edit'); ?>
					<?= anchor('crud/delete/' . $u->id, 'Delete'); ?>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>
