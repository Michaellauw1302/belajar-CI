<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

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
					<?= anchor('crud/edit/') ?>

				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>
