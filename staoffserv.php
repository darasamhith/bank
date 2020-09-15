<?php
session_start();
if(isset($_POST['submit'])){
  $conn = mysqli_connect("localhost", "root", "samhith");
  //Selecting Database
  $db = mysqli_select_db($conn, "bank");
  $to=mysqli_real_escape_string($conn, $_POST['scheme']);
  $am=mysqli_real_escape_string($conn, $_POST['min']);
  $pu=mysqli_real_escape_string($conn, $_POST['reward']);


  if(mysqli_query($conn,"INSERT into offers values('$to','$am','$pu')"))
   {
    echo "success";
   }
   else {
     echo $conn->error;
   }
 }
?>
