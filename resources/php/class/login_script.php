<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/db/config.php';
class login_script extends config{
 public function __construct($username=null,$password=null){
   $this->username = $username;
   $this->password = $password;

 }
 public function login(){
   $config = new config;
   $con = $config->Connect();
   if (isset($_POST['username'])) {
       $username = $this->username;
       $password = $this->password;
       $sql = "SELECT * FROM `feb_db` WHERE `username` = ?";
       $data=$con->prepare($sql);
       $data->execute([$username]);
       $rows =$data-> fetchAll();
           foreach ($rows as $row) {
             $passWord =  $row->password;
             $userName =  $row->username;
             }
             if ($password == $passWord && $username == $userName) {
               $_SESSION['username'] = $username;
               header('location: home_page.php');
             }
   }
 }
}
 ?>
