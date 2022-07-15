<?php
if (isset($_POST['kirim'])) {
	$lokasi = 'file/';
	$nama = basename($_FILES['fupload']['name']);
	$uploadfile = $lokasi . $nama;

	if (move_uploaded_file($_FILES['fupload']['tmp_name'], $uplaodfile)) {

		echo "file sukses";
	}
	else{
		echo "File gagal di upload";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<form method="post" enctype="multipart/form-data">
		File yang di upload	: <input type="file" name="fupload" id="fupload"><br>
		Deskripsi	: <br><input type="text" name="deskripsi" id="deskripsi"><br>
		<input type="submit" value="upload" name="upload" id="upload">
</form>
</body>
</html>