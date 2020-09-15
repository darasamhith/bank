<?php
include("staloanserv.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> Commerce Bank </title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
h1 {color:orange; font-size:40px;font-family: verdana;}
p {color:grey;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:grey;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
    font-size:20px;
}

li a:hover {
    background-color:orange;
}
ul li.active a{
  background-color: orange;
  color:white;
}


.box{
    width: 320px;
    height: 390px;
    background: gainsboro;
    color:black;
    top: 65%;
    left: 15%;
    position: absolute;
    transform: translate(-0%,-25%);
    box-sizing: border-box;
    padding: 30px 30px;
}

h2{
    margin: 0;
    padding: 0 0 20px;
    text-align: left;
    font-size: 22px;
    font-family: verdana;
}
table {
    width:50%;
}
table,  td ,th{
    border: 1px solid black;
    border-collapse: collapse;
}
 td,th {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}

</style>
<body>
  <header>
<div style="background-color:hsl(0, 0%, 24%);padding:20px;">
<h1>Commerce Bank <blockquote style="font-size:12px"><i>We Save Your Money...</i></blockquote></h1>
</div>
</header>
<ul>

  <li><a  href="homes.php">Home</a></li>

  <li><a href="deposit.htm" target="_parent">offers</a></li>
  <li><a href="apploan.php" target="_parent">approve loan</a></li>
  <li><a href="loansta.html" target="_parent">Loan</a></li>
  <li><a href="transsta.php" target="_parent">Transaction Details</a></li>
  <li><a href="index.php" target="_parent">Logout</a></li>


</ul>
<center>
  <h2> loans to be approved:</h2>
  <table id="t01">

    <tr>
      <th>account no:</th>
      <th>required amount:</th>
      <th>purpose:</th>
      <th>documents:</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "samhith");
    //Selecting Database
    $db = mysqli_select_db($conn, "bank");
    $fen=mysqli_query($conn,"SELECT * FROM loan");
    define('acc_no','acc_no');
    define('loan_amt','loan_amt');
    define('purpose','purpose');
    define('documents','documents');
    define('filename','filename');
    while ($field = mysqli_fetch_assoc($fen)) {
      $_SESSION["acc"]=$field[acc_no];
      $_SESSION["amt"]=$field[loan_amt];
      $_SESSION["pur"]=$field[purpose];
      $_SESSION["docu"]=$field[documents];
      $filename=$field[filename];
      $filename='s1.jpg';



      ?>
      <tr>
        <td><?php echo  $_SESSION['acc']; ?></td>
        <td><?php echo  $_SESSION['amt']; ?></td>
        <td><?php echo  $_SESSION['pur']; ?></td>
        <td><img src="<?echo $filename?>" alt="Italian Trulli"></td>;


      </tr>
      <?php
    } ?>
