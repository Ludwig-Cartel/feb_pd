<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/db/config.php';
session_start();
class change_password_script extends config{
  public function __construct($confirmpass=null,$newpass=null){
    $this->confirmpass = $confirmpass;
    $this->newpass = $newpass;

  }
    public function changepassword(){
        $config = new config;
        $con = $config->Connect();
        $uname = $_SESSION['username'];
        $confirmpass =$this->confirmpass;
        $sql = "SELECT * FROM `feb_db` WHERE `username` = '$uname'  ";
        $data=$con->prepare($sql);
        $data->execute();
        $rows =$data-> fetchAll();
        foreach ($rows as $row) {
          $password =  $row->passWord;
          }
          if ($confirmpass == $password) {
            $newpass = $this->newpass;
            $sql = "UPDATE `feb_db` SET `password`='$newpass' WHERE `username` = '$uname' ";
            $data=$con->prepare($sql);
            $data->execute();
    }
  }
}
 ?>
