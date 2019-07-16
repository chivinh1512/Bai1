<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post"> 
		Nhập chuỗi ký tự:<br>
		<input type="text" name="text"><br>
		Nhập số ký tự muốn lấy ngẫu nhiên: <br>
		<input type="number" name="number"><br>
		<input type="submit" name="ok"><br>
	</form>

	<?php
		if (isset($_POST['ok'])) {
		$text=$_POST['text'];
		echo "Bạn đã nhập vào: ".$text ."<br>";
		echo "Số ký tự bạn muốn lấy là: " .$_POST['number']."<br>";
		echo "Ký tự ngẫu nhiên lấy được là: ".substr(str_shuffle($text), 0, $_POST['number']);
		}
	?>
</body>
</html>