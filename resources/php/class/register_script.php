<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/db/config.php';
class register_script extends config{
    public $username;
    public $password;
    public $email;
public function __construct($username=null,$password=null,$email=null){
  $this->username = $username;
  $this->password = $password;
  $this->email = $email;
}

public function register(){
  if(isset($_POST['register'])){
    $config = new config;
    $con = $config ->Connect();
    $username = $this->username;
    $password = $this->password;
    $email = $this->email;
    $sql = "INSERT INTO `feb_pd`(`username`, `password`, `email`) VALUES (?,?,?)";
    $data = $con->prepare($sql);
    $data->execute([$username,$password,$email]);

  }
}
}
?>
