<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>

<body>
	<h1> membuat form dengan ci</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('form/aksi') ?>
	<label for="">Nama</label><br>
	<?= form_error('nama'); ?>
	<input type="text" name="nama"><br>

	<label for="">Email</label><br>
	<?= form_error('email'); ?>
	<input type="text" name="email"><br>

	<label for="">Konfirmasi Email</label><br>
	<?= form_error('konfir_email'); ?>
	<input type="text" name="konfir_email">
	<br>
	<input type="submit" value="simpan">
	</form>
</body>

</html>
