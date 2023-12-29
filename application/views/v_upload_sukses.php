<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View upload</title>
</head>

<body>
	<ul>
		<?php foreach ($upload_data as $item => $value) : ?>
			<li><?= $item; ?> : <?= $value; ?></li>
		<?php endforeach; ?>
	</ul>
</body>

</html>
