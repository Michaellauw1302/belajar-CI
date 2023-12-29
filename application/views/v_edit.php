<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<center>
		<h1>input data</h1>
	</center>
	<?php foreach ($user as $u) { ?>
		<form action="<?= base_url() . 'crud/perbaharui'; ?>" method="post">
			<table>
				<tr>
					<td>Nama : </td>
					<td><input type="text" name="id" value="<?= $u->id ?>"></td>
				</tr>
				<tr>
					<td>Alamat : </td>
					<td><input type="text" name="nama" value="<?= $u->nama ?>"></td>
				</tr>
				<tr>
					<td>Alamat : </td>
					<td><input type="text" name="alamat" value="<?= $u->alamat ?>"></td>
				</tr>
				<tr>
					<td>Pekerjaan : </td>
					<td><input type="text" name="pekerjaan" value="<?= $u->pekerjaan ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="tambah"></td>
				</tr>

			</table>


		</form>
	<?php } ?>
</body>

</html>
