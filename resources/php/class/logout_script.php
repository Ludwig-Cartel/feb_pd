<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/db/config.php';
class logout extends config{
    public function logouts(){
      session_start();
      session_destroy();
      session_unset();
      unset($_SESSION['username']);
      header('location: index.php');
    }
  }

 ?>
