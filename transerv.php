<?php
session_start();
if(isset($_POST['submit'])){
 if(empty($_POST['account']) || empty($_POST['amount'])){
 $error = "account or amount cannot be empty";
 }
 else
 {
   $conn = mysqli_connect("localhost", "root", "samhith");
   //Selecting Database
   $db = mysqli_select_db($conn, "bank");

   $to=mysqli_real_escape_string($conn, $_POST['account']);
   $am=mysqli_real_escape_string($conn, $_POST['amount']);
   if($to==$_SESSION['Email']){
     $suc="enter valid account no";
     $_SESSION["suc"]=$suc;

     echo"you cannot send to your account";
   }
   else{
   $query = mysqli_query($conn, "SELECT * FROM account WHERE acc_no='$to'");
   $rows = mysqli_num_rows($query);
   if($rows == 1){
     $field=mysqli_fetch_array($query);
     define('acc_no','acc_no');
     define('balance','balance');
     define('no_tra','no_tra');
     $asd=$_SESSION['Email'];
     $_SESSION["acc"]=$field[acc_no];
     $_SESSION["bal"]=$field[balance];
     $da=date('y-m-d');
     $no=$field[no_tra]-1;
     $fgh=mysqli_query($conn,"SELECT * from transactions where date='$da'");
     $hjk=mysqli_query($conn,"SELECT * from account WHERE acc_no='$asd'");
     $op=mysqli_fetch_array($hjk);
     $nos=$op[no_tra];
     $rows = mysqli_num_rows($fgh);
     if($rows == 0){
       $nos=0;
       $s =mysqli_query($conn,"UPDATE account SET no_tra='$nos' WHERE acc_no='$asd'");
     }
     if($nos>=5){
       $suc="transaction limit exceeded";
       $_SESSION["suc"]=$suc;
     }
     else{
     if($_SESSION['ba']>$am)
     {
     $de=$_SESSION['bal']+$am;

     $up=$_SESSION['ba']-$am;
     $fen=mysqli_query($conn,"SELECT * FROM transactions");
     define('i','i');
     define('trans_id','trans_id');
     while ($field = mysqli_fetch_assoc($fen)) {
     $i=$field[trans_id];
   }
   $i=$i+1;
     $sql ="UPDATE account SET balance='$de' WHERE acc_no='$to'";
     //$s ="UPDATE account SET no_tra='$no' WHERE acc_no='$to'";
     $result="UPDATE account SET balance='$up' WHERE acc_no='$asd'";
     $no=

     $dsa="INSERT into transactions(trans_id,acc_no,date,debit,credit)values('$i','$asd','$da','$am','')";
     $i=$i+1;
     $dsas="INSERT into transactions(trans_id,acc_no,date,debit,credit)values('$i','$to','$da','','$am')";

    //$sq = "CREATE TRIGGER `tran_no` AFTER UPDATE ON `transactions` FOR EACH ROW UPDATE account SET no_tra=no_tra+1 WHERE acc_no='$to'";
    if (mysqli_query($conn,$sql)&&mysqli_query($conn,$result)&&mysqli_query($conn,$dsa)){

    $_SESSION['bal']=$de;
    $_SESSION['ba']=$up;
    define('suc','suc');
    $suc="transaction successfull";
    $_SESSION["suc"]=$suc;
    $suc="enter details for transaction";
    #$_SESSION["suc"]=$suc;

} else {
  $suc="error in transactions";
  $_SESSION["suc"]=$suc;
  $suc="enter details for transaction";
  #$_SESSION["suc"]=$suc;
    echo "Error updating record: " . $conn->error;
}
}
else {  $suc="insuffecient balance";
  $_SESSION["suc"]=$suc;
  $suc="enter details for transaction";
  #$_SESSION["suc"]=$suc;
  echo"insuffecient balance";
}
}
}
}
}
}
?>
