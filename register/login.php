<!DOCTYPE html>

<?php
require "../config/config.php";
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signin</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>-->
</head>
<body>
  <div class="login_form">
    <form action="login.php" method="POST">
        <input type="Email" name="log_email" placeholder="email" value="
        <?php
        if(isset($_SESSION['log_email']))
        {
            echo $_SESSION['log_email'];
        } 
        ?>" required>

        <input type="password" name="log_password" placeholder="password">
    </form>
    
  </div>  
</body>
</html>