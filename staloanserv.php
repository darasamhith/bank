<?php
session_start();
if(isset($_POST['submit'])){
  $conn = mysqli_connect("localhost", "root", "samhith");
  //Selecting Database
  $db = mysqli_select_db($conn, "bank");
  $asd=  $_POST['account'];
  $app=mysqli_query($conn,"SELECT * FROM loan where acc_no='$asd'");
  define('loan_amt','loan_amt');
  define('balance','balance');
  if($appro=mysqli_fetch_array($app)){
    $aa=$appro[loan_amt];
  $amt=$aa*1.1;
  $stat='approved';
  $res="UPDATE loan set status='approved',repayment='$amt' WHERE acc_no='$asd'";
  $da=date('y-m-d');
  $fen=mysqli_query($conn,"SELECT * FROM transactions");
  define('i','i');
  define('trans_id','trans_id');
  while ($field = mysqli_fetch_assoc($fen)) {
  $i=$field[trans_id];
}
$i=$i+1;
$query = mysqli_query($conn, "SELECT * FROM account WHERE acc_no='$asd'");
$row=mysqli_fetch_array($query);
$b=$row[balance];
$up=$b+$amt;

  $dsa="INSERT into transactions(trans_id,acc_no,date,debit,credit)values('$i','$asd','$da','','$amt')";
  $dfg="UPDATE account SET balance='$up' WHERE acc_no='$asd'";
  if(mysqli_query($conn,$res)&&mysqli_query($conn,$dsa)&&mysqli_query($conn,$dfg))
  {
    echo "loan approved successfully";
  }
}
}
?>
