<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/db/config.php';
session_start();
class changepassword extends config{
  public function __construct($confirmpass=null,$newpass=null){
    $this->confirmpass = $confirmpass;
    $this->newpass = $newpass;

  }
    public function changepassword(){
        $config = new config;
        $con = $config->Connect();
        $uname = $_SESSION['username'];
        $confirmpass =$this->confirmpass;
        $sql = "SELECT * FROM `oct_db` WHERE `userName` = '$uname'  ";
        $data=$con->prepare($sql);
        $data->execute();
        $rows =$data-> fetchAll();
        foreach ($rows as $row) {
          $password =  $row->passWord;
          }
          if ($confirmpass == $password) {
            $newpass = $this->newpass;
            $sql = "UPDATE `oct_db` SET `passWord`='$newpass' WHERE `userName` = '$uname' ";
            $data=$con->prepare($sql);
            $data->execute();
    }
  }
}
 ?>
