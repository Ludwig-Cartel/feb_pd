<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resource/php/class/change_password_script.php';
if (isset($_POST['change'])) {
  // code...
$changepassword = new change_password_script($_POST['confirmpass'],$_POST['newpass']);
$changepassword ->changepassword();
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
