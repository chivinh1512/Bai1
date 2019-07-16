<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<h2>Form nhập thông tin tài khoản</h2>
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" placeholder="Vui lòng nhập email"></td>
			</tr>
			<tr>
				<td>Họ tên:</td>
				<td><input type="text" name="fullname" placeholder="Vui lòng nhập họ và tên"></td>
			</tr>
			<tr>
				<td>Ngày sinh:</td>
				<td><input type="date" name="birthday"></td>
			</tr>
			<tr>
				<td>Mật khẩu:</td>
				<td><input type="password" name="pass" placeholder="Vui lòng nhập password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="xác nhận"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['ok'])) {
			echo "Email là: ". $_POST['email'] ."<br>";
			echo "Họ và tên là: ".$_POST['fullname']."<br>";
			echo "Ngày sinh là: ".$_POST['birthday']."<br>";
			echo "Mật khẩu là: ".$_POST['pass']."<br>";
		}
	?>
</body>
</html>