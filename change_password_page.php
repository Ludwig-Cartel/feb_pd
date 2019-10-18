<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/class/change_password_script.php';
if (isset($_POST['change'])) {
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
    <main class="py-4">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-7">
        <div class="card">
        <div class="card-header text-center">Changing the password</div>
          <div class="card-body">
        	<form method="POST">
        	<input type="hidden" name="_token" value="DckCorowTc7XSm9rN42jc9hwR0cFbFewUPxAjOah">

            <div class="form-group row">
             <label for="password" class="col-md-4 col-form-label text-md-right">Old Password</label>
              <div class="col-md-7">
                <input id="password" type="password" class="form-control " name="confirmpass" required autocomplete="new-password">
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">New Password</label>
                <div class="col-md-7">
                  <input id="password-confirm" type="password" class="form-control" name="newpass" required autocomplete="new-password">
                </div>
              </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-5">
                <a href="index.php">
                  <button type="submit" name="change"class="btn btn-primary">
                  Change
                  </button>
                </a>
              </div>
           </div>

        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
          </main>
  </body>
</html>
