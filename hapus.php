<?php
include("database.php");
$nim   = $_GET['nim'];
$query="DELETE from datamahasiswa where nim ='$nim'";
	$hasil = mysqli_query($conn,$sql);

header("location:view.php");
?>