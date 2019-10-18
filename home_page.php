<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/oct_pd/resource/php/class/logout.php';
if (isset($_POST['logout'])) {
$logout = new logout();
$logout -> logouts();
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="resources\css\index.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Welcome Page</title>


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Welcome<?php session_start();
                  $uname = $_SESSION['username'];
                    if(isset($uname)){echo $uname;}else{
                        header('location: index.php');
                    } ?>
                </div>
                <div class="links">
                  <a href="change_password_page.php">Change Password</a>
                  <form action="" method="post">
                  <input type="submit" name="logout" value="logout">
                </form>

              </div>
            </div>
        </div>
    </body>
</html>
