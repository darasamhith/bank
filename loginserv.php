<?php
session_start();
//session_register("Email");
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user_id']) || empty($_POST['password'])){
 $error = "user_id or Password is Invalid";
 }
 else
 {
	  //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "samhith");
 //Selecting Database
 $db = mysqli_select_db($conn, "bank");
 //Define $user and $pass
$user_id=mysqli_real_escape_string($conn, $_POST['user_id']);
$password=mysqli_real_escape_string($conn, $_POST['password']);
$staff_id=mysqli_real_escape_string($conn, $_POST['user_id']);

 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM user WHERE user_id='$user_id' AND password='$password'");
 $say = mysqli_query($conn, "SELECT * FROM staff WHERE staff_id='$staff_id' AND password='$password'");
#$result=mysqli_query($query) or die (mysql_error);
$yes=mysqli_num_rows($say);
 $rows = mysqli_num_rows($query);
 if($rows == 1){
   $result=mysqli_query($conn,"SELECT * FROM account WHERE user_id='$user_id'");
   $field=mysqli_fetch_array($result);
   define('address','address');
   define('balance','balance');
   define('acc_no','acc_no');
   define('name','name');
   define('IFSC','IFSC');

   #$sam=$field['name'];
   $suc="enter details for transaction";
   $_SESSION["suc"]=$suc;
   $_SESSION["adde"]=$field[address];
   $_SESSION["ba"]=$field[balance];
   $_SESSION["Email"]=$field[acc_no];
   $_SESSION["nameof"]=$field[name];
   $_SESSION["yourskills"]=$field[IFSC];

   echo "<script language=JavaScript>document.location.href='home.php'</script>";

  //Redirecting to other page
 }
 elseif ($yes==1) {
   echo "<script language=JavaScript>document.location.href='homes.php'</script>";
   // code...
 }
 else
 {
 $error = "user_id or Password is Invalid.Sign up if you are new user!";
 echo "$error";
 echo "uable to login";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
