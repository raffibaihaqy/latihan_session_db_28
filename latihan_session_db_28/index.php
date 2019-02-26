<?php 
include 'koneksi.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<link rel="stylesheet" type="text/css" href="index.css">
 </head>
 <body>
 	<h2>Go Fun The World,<?php echo $_SESSION['username'];?>(<?php echo $_SESSION['role'];?>)</h2>
 	<p>Click here for <a href="logout.php" class="log">LogOut</a></p>
 </body>
 </html>