<?php
session_start();
$owner_id= $_SESSION['owner_id'];
include 'connection.php';
if (isset($_POST["withdraw"])) {
  
  
      $current_amount = $_POST["withdraw_amount"];
      
      if($current_amount>20){
      $new_amount = $current_amount;
      $sql = "UPDATE investment SET amount = $new_amount WHERE 	invester_id= $owner_id";
      if ($link->query($sql) === TRUE) {
               
      } else {
          echo "Error updating amount: " .$link->error;
      }
    }
  } else {
    
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>investment_info</title>
  
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
                    <a class="nav-link active" aria-current="page" href="invester.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Learn</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">contect</a>
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
      <?php
      include 'connection.php';
        
        $sql ="SELECT SUM(amount) AS total_amount, COUNT(founder_id) AS total_person_count FROM investment WHERE invester_id = $owner_id";

        // Execute query
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
          // Fetch row
          $row = $result->fetch_assoc();
    
        ?>
    
        <h1 class="text-center" style="font-weight: bold;font-size: 2.0em;">Total Investment amount,</h1>
        <h1 class="text-center" style="font-weight: bold;font-size: 1.9em; margin-top: 20px;">$<?php echo $row["total_amount"];?></h1>
        <h1 class="text-center" style="font-weight: bold;font-size: 1.8em;margin-top: 20px;">Total Investment,</h1>
        <h1 class="text-center" style="font-weight: bold;font-size: 1.7em;margin-top: 20px;"><?php echo $row["total_person_count"];?></h1>
        
        <?php  
      
    }
    
 ?>

        
        <div class="d-grid gap-2 col-8 mx-auto">
       
        <label for="More_describtion" class="form-label">Amount:</label>
        <form class="needs-validation" action="investment_info.php" method="post">
      <input type="text" class="form-control" style="width: 500px;
  height: 80px;"name="withdraw_amount">
       <button type="submit" name="withdraw"class="btn btn-primary btn-block mb-4" style="background-color:rgba(6, 246, 45, 0.79);">withdrraw</button>
      </form>
      
        
          </div>

          
     </div>
     <script type="text/javascript" src ="js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src ="js/slick.min.js"></script>
    <script type="text/javascript" src ="js/my.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
    </html>
