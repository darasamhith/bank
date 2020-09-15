<?php
session_start(); ?>
<html>
<style>
.form2{
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
	border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	opacity:0.99;
	padding-bottom:10px;
		width:90%;
	}
  input[type=submit],[type=reset] {
    width: 50%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	float:left;
}

input[type=submit]:hover,[type=reset]:hover {
    background-color: red;
}
input[type=text],[type=date],[type=time],[type=number],[type=email],[type=password],select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
  <body style="background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);">
<div class="form2">


<form  action="insert.php" name="myForm" method="POST">

		<label for="acc_no">account no:</label>
			<input type="text" id="name" name="name" value=<?php echo  $_SESSION['Email']; ?> ></br>
			<label for="Lastname">name:</label>
				<input type="text" id="name" name="Lastname" value=<?php echo  $_SESSION['nameof']; ?>></br>
				<label for="E-mail">balance:</label>
			    <input type="text" id="user_id" name="email" value=<?php echo  $_SESSION['ba']; ?>></br>
			 <label for="Contactno">address:</label>
		    <input type="text" id="password" name="Contactno" value=<?php echo  $_SESSION['adde']; ?>></br>
				<label for="skills">skills:</label>
				 <input type="text" id="password" name="skills"  value=<?php echo  $_SESSION['yourskills']; ?>></br>
       </form>
     </div>
  <div>
    <a href="home.php">Back to home</a>
</body>
</html>
