<form method="post">
		a : <input type="text" name="txtA"><br>
		b : <input type="text" name="txtB"><br>
		<input type="submit" name="btnTong" value="+">
		<input type="submit" name="btnHieu" value="-">
		<input type="submit" name="btnTich" value="*">
		<input type="submit" name="btnThuong" value="/">
	</form>
	<?php
	if (isset($_POST['btnTong'])) {
		$a=$_POST['txtA'];
		$b=$_POST['txtB'];
		$c=$a+$b;
		echo $a."+".$b."=".$c;
	}
	if (isset($_POST['btnHieu'])) {
		$a=$_POST['txtA'];
		$b=$_POST['txtB'];
		$c=$a-$b;
		echo $a."-".$b."=".$c;
	}
	if (isset($_POST['btnTich'])) {
		$a=$_POST['txtA'];
		$b=$_POST['txtB'];
		$c=$a*$b;
		echo $a."x".$b."=".$c;
	}
	if (isset($_POST['btnThuong'])) {
		if ($_POST['txtB'] != 0) {
		$a=$_POST['txtA'];
		$b=$_POST['txtB'];
		$c=$a/$b;
		echo $a."/".$b."=".$c;
	}
	else{
		echo "vui lòng chọn B khác 0";
	}
}
	?>