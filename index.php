<?php
include("loginserv.php");
?>
<html>
<head>
<title>Login Form </title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
    h1{
      color:orange;
      font-size:40px;
      font-family: verdana;
      text-align: left;
    }
    </style>
<body>
  <header>
    <div style="background-color:hsl(0, 0%, 20%); padding:3px;">
    <h1>Commerce Bank <blockquote style="font-size:12px"><i>We Save Your Money...</i></blockquote></h1>
    </div>
  </header>
  <div>
  <h><?php include('slideshow.php');?></h>
</div>
    <div class="loginbox">
    <img src="log1.png" class="avatar">
        <h2>Login</h2>
        <form action="" method="POST">
            <p>User_id</p>
            <input type="text" id="user_id" name="user_id" placeholder="Enter User id">
            <p>Password</p>
            <input type="password" id="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Submit">


        </form>
      <span><?php echo $error; ?></span>
    </div>
</body>
</head>
</html>
