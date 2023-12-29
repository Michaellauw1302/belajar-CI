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

	<form action="<?= base_url() . 'crud/tambah_aksi'; ?>" method="post">
		<table>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan : </td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="tambah"></td>
			</tr>

		</table>


	</form>

</body>

</html>
