<?php 
//login.php
session_start();

if(isset($_SESSION['message'])){
	if ($_SESSION['message'] !="") {
		echo "<span style = 'color : white'>".$_SESSION['message']."</span>";
		$_SESSION['message'] = "";
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
 	<div class="container1"><h2>Sign In</h2></div>
 	<form method="POST" action = "ceklogin.php">
 		<div class="table">
 			<div class="apa">
 		<table>
 			 <tr>
 				<td></td>
 				<td><input type="text" name="username" placeholder="Username" class="usr" required></td>
 			</tr>
 		   
 			<tr>
 				<td></td>
 				<td><input type="password"  name="password" placeholder="Password" class="psr" required></td>
 			</tr>
 		    
 			<tr>
 				<td></td>
 				<td><button type="submit" name="login" class="btn">Sign In</button></td>
 			</tr>
 		    
 		</table>
 		<div class="akun">Don't have an account ?</div>
 		<div class="reg">
 			<ul>
 				<li><a href="register.php">Register here</a></li>
 			</ul>
 		</div>
 	</div>
 	</div>
 	</form>
 </body>
 </html>