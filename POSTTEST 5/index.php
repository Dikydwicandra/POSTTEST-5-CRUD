<?php
    require "user.php" ;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
          <h1>Login User</h1>
            <form method="POST" action="tampilan.php">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <p>Login Sebagai Admin,</p><a href='index1.php'>Klik disini</a>
                <button>Log In</button>
                
            </form>
        </div>
    </body>
</html>