<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/oct_pd/resource/php/class/register_script.php';
if (isset($_POST['register'])) {
$register = new register_script($_POST['username'],$_POST['password'],$_POST['email']);
$register -> register();
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
