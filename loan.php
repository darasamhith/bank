<?php
include("loanserv.php");
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

.box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color:black;
    font-size: 15px;
}

.box input{
    width: 100%;

}

.box input[type="text"],
{
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}
.box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: orange;
    color: white;
    font-size: 18px;
    border-radius: 20px;
}
.box input[type="submit"]:hover
{
    cursor: pointer;
    background: grey;
    color: black;
}
/*.box a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color:red;
}*/
.loginbox a:hover
{
    color: black;
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
  <li><a href="loan.php" target="_parent">Loan</a></li>
  <li><a href="trans.php" target="_parent">Transaction Details</a></li>
  <li><a href="index.php" target="_parent">Logout</a></li>

</ul>
<div class="box">
<form action="" method="post" enctype="multipart/form-data">
  <h2>Application for loan</h2>
  <p>loan Amount:
   <input type="text" name="amount" placeholder="Enter required Amount"></p><br>
  <p>purpose:
   <input type="text" name="purpose" placeholder="Enter the purpose of loan"></p><br>
  <p>documents:
    <input type="file" name="myfile" id="fileToupload" placeholder="upload the documents"></P><br>
  <input type="submit" name="submit">
</form>
</div>


</body>
</html>
