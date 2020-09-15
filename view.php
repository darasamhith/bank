<?php
$conn = mysqli_connect("localhost", "root", "samhith");
//Selecting Database
//$id=mysqli_real_escape_string($conn,$_GET['id']);
$db = mysqli_select_db($conn, "bank");
define('documents','documents');
//$query = mysqli_query($conn, "SELECT * FROM loan WHERE acc_no='$id'");

//$rows = mysqli_fetch_array($query);
$path=$rows[filename];
header("content_type:application/pdf");
$data=file_get_contents($path);
echo $data;
}
?>
