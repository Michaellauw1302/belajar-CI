<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload CI</title>
</head>

<body>
	<center>
		<h1>belajar upload dengan CI</h1>
		<h2>halaman upload</h2>
	</center>
	<?php echo $error; ?>
	<?php echo form_open_multipart('upload/aksi_upload'); ?>
	<input type="file" name="berkas">
	<br>
	<input type="submit" value="upload">
	</form>
</body>

</html>
