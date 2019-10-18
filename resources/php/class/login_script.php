<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/oct_pd/resources/php/db/config.php';
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
       $sql = "SELECT * FROM `oct_db` WHERE `userName` = ?";
       $data=$con->prepare($sql);
       $data->execute([$username]);
       $rows =$data-> fetchAll();
           foreach ($rows as $row) {
             $passWord =  $row->passWord;
             $userName =  $row->userName;
             }
             if ($password == $passWord && $username == $userName) {
               $_SESSION['username'] = $username;
               header('location: homepage.php');
             }
   }
 }
}
 ?>
