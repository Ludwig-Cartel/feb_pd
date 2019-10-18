<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/php/class/login_script.php';
session_start();
if (isset($_POST['login'])) {
$login = new login_script($_POST['username'],$_POST['password']);
$login -> login();
}
 ?>
 <!doctype html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="2mLzO2ucQRQP8O28PNFpJTRKNCttlQB5Tifs9ZXp">
     <title>LOGIN</title>
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 </head>
 <body>
     <div id="app">
         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
             <div class="container">
                 <a class="navbar-brand" href="index.php">
                     LOGIN
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">

                     </ul>

                     <ul class="navbar-nav ml-auto">

                                                             <li class="nav-item">
                                     <a class="nav-link" href="register_page.php">Register</a>
                                 </li>
                     </ul>
                 </div>
             </div>
         </nav>



         <main class="py-4">
             <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">


                 <div class="card-header">Login</div>

                 <div class="card-body">
                     <form method="POST" action="Login.html">
                         <input type="hidden" name="_token" value="2mLzO2ucQRQP8O28PNFpJTRKNCttlQB5Tifs9ZXp">
                         <div class="form-group row">
                             <label for="email" class="col-md-4 col-form-label text-md-right">Username</label>



                             <div class="col-md-6">
                                 <input id="username" type="username" class="form-control " name="username" value="" required autocomplete="email" autofocus>

                                                             </div>
                         </div>

                         <div class="form-group row">
                             <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                             <div class="col-md-6">
                                 <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">

                                                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-md-6 offset-md-4">

                             </div>
                         </div>

                         <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                 <button type="submit" class="btn btn-primary">
                                     Login
                                 </button>


                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
         </main>
     </div>
 </body>
 </html>
