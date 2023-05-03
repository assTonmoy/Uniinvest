<?php

include 'connection.php';
session_start();

if(isset($_POST['button-1'])){
  header("Location:sign.php");
  $_SESSION['service'] = 'INVESTER';
  exit;
}
if(isset($_POST['button-2'])){
  header("Location:sign.php");
  $_SESSION['service'] = 'FOUNDER';
  
  exit;
}
if(isset($_POST['button-3'])){
  header("Location:sign.php");
  $_SESSION['service'] = 'SERVICE';
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choice</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

   <style>
    html {
    scroll-behavior: smooth;
   }
   .body{
    min-height:
   }
    
  .navbar-nav > li{
  padding-left:30px;
  padding-right:30px;
}
.navbar-nav{
  

  font-size: 20px;
  font-weight: bold;
}
.container-flud-1{
  background-color:rgba(255, 255, 255, 1);
}




 
  

    </style>
</head>
<body>
  
  <div class="container-flud" >  
      <header >
      
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(6, 246, 45, 0.79); height:100px">
            <div class="container-fluid">
              <a class="navbar-brand" style="font-weight: bold;font-size: 30px;" href="#">UNI_INVEST</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav" style="position: absolute;  right: 600px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Learn.php">Learn</a>
                  </li>
                  
                  
                <li class="nav-item">
                    <a class="nav-link " href="login.php" tabindex="-1" aria-disabled="true">Log in</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">sign-up</a>
                  </li>

                <div class="navber-nev-1" style="position:relative; top: 5px; left:400px">
                <form class="d-flex ">
                  <input class="form-control  me-2" style="height: 40px; width: 300px;" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-link" type="submit"><i class="fa fa-search" style="color:black"></i></button>
                </form>
                
              </div>
                
              </div>
            </div>
           
           
        </nav>
        
       
     
      </header>  
     
      <div class="container mt-3" style="width: 800px; position: absolute;
  top: 250px;
  left: 500px;">
    
        <h1 class="text-center">OPEN ACCOUNT AS A, </h1>
        <form class="needs-validation" action="choice.php" method="post">

        
        <div class="d-grid gap-2 col-8 mx-auto">
        <button type="button-1" name="button-1" class="btn btn-primary btn-block mb-4" style="background-color:rgba(6, 246, 45, 0.79);">INVESTER</button>
        <button type="button-2" name="button-2"class="btn btn-primary btn-block mb-4" style="background-color:rgba(6, 246, 45, 0.79);">FOUNDER</button>
       

            
        
          </div>

          </form>
     </div>
     <script type="text/javascript" src ="js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src ="js/slick.min.js"></script>
    <script type="text/javascript" src ="js/my.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
    </html>
