<?php
include '../Functions/functions.php';

if (isset($_FILES['uploaded'])) {
	UploadIMG($_FILES['uploaded']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload Picture</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<label for="uploaded">UPLOAD IMG</label><br>
		<input type="file" name="uploaded" id="uploaded"><br>
		<button type="submit">Kirim</button>
	</form>
</body>
</html>