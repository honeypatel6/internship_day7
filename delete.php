<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection1 = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['deleteid'];

	$q = mysqli_query($connection1,
		"update tbl_student set is_delete = 1 where st_id='{$id}'") or die("Error". mysqli_error($connection1));

	if ($q) {
		echo "<script>alert('Record Deleted');window.location='displayform.php';</script>";
	}
?>