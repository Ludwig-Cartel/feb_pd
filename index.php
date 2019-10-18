<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/class/login_script.php';
session_start();
if (isset($_POST['login'])) {
$login = new login_script($_POST['username'],$_POST['password']);
$login -> login();
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
