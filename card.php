<?php

session_start();

include 'connection.php';
if(isset($_GET['id'])){
   $_SESSION['founder_id'] = $_GET['id'];
}

$id = $_SESSION['founder_id'];

$owner_id= $_SESSION['owner_id'];


if(isset($_POST['button-1'])){
  
    $amount= $_POST['amount'];
    $sqy="insert into investment (invester_id,founder_id,amount,clone_amount)values('$owner_id','$id','$amount','$amount')";
    $result = mysqli_query($link,$sqy);
    if(!$result){
      
      die(mysqli_error($link));
    }
    
    


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
  
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
                    <a class="nav-link active" aria-current="page" href="front_page.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Learn.php">Learn</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">contect</a>
                  </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="login.php" tabindex="-1" aria-disabled="true">Log out</a>
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
   
       
    
    <main>
    <section id="tutorial-3" >
    <article style="
  position: absolute;
  top: 150px;
  right:500px;
  width:70%;
  height: 100px;">
  <?php
        
        $pic = mysqli_query($link,"SELECT * FROM product WHERE owner_id = $id");
        while($row = mysqli_fetch_array($pic)){
        ?>
    <h1 style="text-indent: 20px; color: black;font-weight: bold;"><?php echo $row["Headline"];?></h1>
    <img style="float: left; margin-right: 30px;margin-top: 20px;" src=<?php echo "./image/".$row['Image'];?> class="img-fluid" alt="Responsive image">
   
    </article>
    <article style="
  position: absolute;
  top: 1000px;
  right:500px;
  width:70%;
  height: 100px;">
  <h3 style="text-indent: 20px; color: black;margin-top: 20px;">Highlights</h3>
  <h5 style="text-indent: 20px; color: black;margin-top: 20px;"><?php echo $row["highlight1"];?></h5>
  <h5 style="text-indent: 20px; color: black;margin-top: 20px;"><?php echo $row["highlight2"];?></h5>
  <h5 style="text-indent: 20px; color: black;margin-top: 20px;"><?php echo $row["highlight3"];?></h5>
  <h5 style="text-indent: 20px; color: black;margin-top: 20px;"><?php echo $row["highlight4"];?></h5>
  <h5 style="text-indent: 20px; color: black;margin-top: 20px;"><?php echo $row["highlight5"];?></h5>
  
  </article>
  <article style="
  position: absolute;
  top: 1500px;
  right:500px;
  width:70%;
  height: 100px;">
  <p style="font-size: 30px;"><?php echo $row["More_describtion"];?></p>

  </article>
  <?php  
      
    }
    
 ?>
    <div class="container" style="position: absolute;
  top: 180px;
  right:0;
  width:20%;
  height: 700px;
  border: 3px solid #73AD21;">
 
    <div class="form-outline mb-4" style="position: absolute;
    top: 90px;
    right:40px;
    width:80%;
    height: 10px;">
    <form action="card.php" method="post">

    <label class="form-label"style="text-align: center; font-weight: bold;font-size: 1.4em;">Amount</label>
      <input type="text"  class="form-control" name="amount"/>
      <button type="submit" name="button-1"  class="btn btn-primary btn-block mb-4" style="background-color:rgba(6, 246, 45, 0.79); margin-top: 20px;">INVEST</button>
    <button type="submit" name="button-2" class="btn btn-primary btn-block mb-4" style="background-color:rgba(6, 246, 45, 0.79);margin-top: 20px;">WITHDRAW</button>
    </form>
    </div>

</div>
 
 
</div>
</section>


    <section id="tutorial-4" style=" position: absolute;
  top: 2000px;
  right: 0;
  width:100%;
  height: 100px;">
    <hr class="hr hr-blurry" />
    <div class="service-section pt-4">
                
                <div class="row text-left text-md-center">
                    <div class="col-lg-4 com-md-6">
                       
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    <div class="col-lg-4 com-md-6">
                        
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    
                </div>
            </div>
        

    
    </main>
    <footer style="margin-top: 30px;">
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <p><i class="bi bi-facebook fa-lg"></i> Facebook</p> 
    </div>
    <div class="col">
    </div>
    <div class="col">
     </div>
    <div class="col">
    <p><i class="bi bi-youtube fa-lg"></i> Youtube</p> 
    </div>
    <div class="col">
     </div>
     </div> 
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <p><i class="bi bi-instagram"></i> instagram</p> 
    </div>
    <div class="col">
    </div>
    <div class="col">
     </div>
    <div class="col">
    <p><i class="bi bi-envelope"></i> Gmail</p> 
    </div>
    <div class="col">  
      
    </div>
   
  </div> 
      
    </footer>
    </section>
        
    
  </div>   
    
                
              
    


    <script type="text/javascript" src ="js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src ="js/slick.min.js"></script>
    <script type="text/javascript" src ="js/my.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
