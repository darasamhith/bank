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

body {background-color:white;
background-image: url("s4.jpg");
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
</style>

<body>
  <header>
<div style="background-color:hsl(0, 0%, 24%);padding:20px;">
<h1>Commerce Bank <blockquote style="font-size:12px"><i>We Save Your Money...</i></blockquote></h1>
</div>
</header>
<ul>

  <li><a  href="#home">Home</a></li>
  <li><a href="apploan.php" target="_parent">approve loan</a></li>
  <li><a href="loansta.php" target="_parent">Loan</a></li>
  <li><a href="addoffer.php" target="_parent">add offer</a></li>
  <li><a href="transsta.php" target="_parent">Transaction Details</a></li>
  <li><a href="index.php" target="_parent">Logout</a></li>


</ul>


</body>
</html>
