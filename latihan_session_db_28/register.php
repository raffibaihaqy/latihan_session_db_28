<?php
  //register.php
  session_start();

  if (isset($_SESSION['message'])) {
    if ($_SESSION['message']!="") {
      echo "<span style='color:white'>".$_SESSION['message']."</span>";
      $_SESSION['message'] = "";
    }
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Register</title>
         <link rel="stylesheet" type="text/css" href="reg.css">
       </head>
       <body>
          <div class="judul"><h2>Register Here</h2></div>
          <form method="POST" action="cekregister.php">
            <div class="table">
              <div class="zzz">
            <table>
                <tr>
                    <td></td>
                    <td> <input type="text" name="username" required class="usr" placeholder="Username"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="password" name="password" required class="psr" placeholder="Password"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <button type="submit" name="register" class="btn">Register</button> </td>
                </tr>
            </table>
            <div class="akun">Have an account ?</div>
        <div class="reg">
              <ul>
            <li><a href="login.php">Login here</a></li>
              </ul>
        </div>
          </div>
          </div>
          </form>
          
     </body>
 </html>
