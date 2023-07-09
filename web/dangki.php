<?php
    include_once 'config.php';
	if(isset($_POST['dangki1']))
	{
		// variables for input data
		$taikhoan = $_POST['firstname'];
		$matkhau = $_POST['password'];
		$email =  $_POST['email'];
		// variables for input data
		
		// sql query for inserting data into database
		$sql_query = "INSERT INTO nguoidung(taikhoan,matkhau,email) VALUES('$taikhoan','$matkhau','$email')";
		// sql query for inserting data into database
		if(mysqli_query($links,$sql_query))
		{
		?>
			<script type="text/javascript">
			alert('dang ky thanh cong ');
			window.location.href='http://localhost/bansach/ImageSlider/giohang.php/';
			$_SESSION('dangki1') = $taikhoan;
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
			alert('dang ky that bai');
			</script>
			<?php
		}

	}
?>
	