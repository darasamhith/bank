<?php
session_start();
$suc="enter details for transaction";
$_SESSION["suc"]=$suc;
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
a
body {background-color:White;
background-image: url("bank.jpg");
}
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
table {
    width:50%;
}
table,  td {
    border: 1px solid black;
    border-collapse: collapse;
}
 td {
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

  <li><a  href="home.php">Home</a></li>
  <li><a href="inf.php" target="_self">info</a></li>
  <li><a href="offer.php" target="_parent">offers</a></li>
  <li><a href="transfer.php" target="_parent">transfer</a></li>
  <li><a href="loan.html" target="_parent">Loan</a></li>
  <li><a href="trans.php" target="_parent">Transaction Details</a></li>
  <li><a href="index.php" target="_parent">Logout</a></li>


</ul>
<center>
  <a href="home.php" target="_self">back</a>
<h2> Account Details:</h2>
<table id="t01">

  <tr>
    <td>Account_no:</td>
    <td> <?php echo  $_SESSION['Email']; ?> </td>

  </tr>
  <tr>
    <td>Balance:</td>
    <td> <?php echo  $_SESSION['ba']; ?> </td>

  </tr>
  <tr>
    <td>Name:</td>
    <td> <?php echo  $_SESSION['nameof']; ?></td>

  </tr>
  <tr>
    <td>Address:</td>
    <td> <?php echo  $_SESSION['adde']; ?></td>

  </tr>
  <tr>
    <td>IFSC:</td>
    <td><?php echo  $_SESSION['yourskills']; ?> </td>

  </tr>
</table>

</center>
</body>
</html>
