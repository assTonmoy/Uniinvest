<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNI INVEST</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    

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

#tutorial-1{
  padding:2% 5%;
  background: #BEFCAA;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-2{
  
  padding:3% 10%;
  background: #fff;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-3{
  
  padding:3% 10%;
  background: #fff;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-4{
  
  padding:3% 10%;
  background: #fff;
}
footer{
  padding:3% 10%;
  background: #fff;;
}
#tutorial-5{
  
 
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
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
                    <a class="nav-link " href="login.php" tabindex="-1" aria-disabled="true">Log In</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="choice.php" tabindex="-1" aria-disabled="true">sign-up</a>
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
        <div class="container-flud-2" style="margin-top: 0px; margin-bottom:0px;margin-right: 0px; margin-left: 0px;   height:90vh">
        
          
       <section id="tutorial-5">
       <div class="container-p">
       <div class="row">
    <div class="col-sm-3 col-md-6">
    <img src="image\Group 3.png" class="img-fluid rounded" style="width: 800px; height: 840px;" alt="My Image">
   

    
    </div>
       
     <div class="col-sm-9 col-md-6">
     <img src="image\Rectangle 4.png" class="img-fluid rounded" style="width: 800px; height: 840px;" alt="My Image">
    </div>
       
     </div>
     </section> 
       </div>
        <div class="container-flud-2" style=" border: 0.5px solid white; margin-top: 0px; margin-bottom:0px;margin-right: 0px; margin-left: 0px;  padding: 100px; background-color: rgba(73, 225, 20, 0.46); height:100vh">
        
          
       <section id="tutorial-5">
      <div class="section-title">
        <h3 class="text-left" style=" font-size: 40px; margin-bottom:15px;">Raising Now</h3>
        </div> 
        <div class="row d-flex">
        <?php
        include 'connection.php';
        $pic = mysqli_query($link,"SELECT * FROM product");
        while($row = mysqli_fetch_array($pic)){
        ?>
         
     
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                         
                        
                            <img class="card-img-top" src=<?php echo "./image/".$row['Image'];?> alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row["product_name"];?></h4>
                                <p class="card-text"><?php echo $row["product_description"];?></p>
                                <a class="card-link stretched-link" target="_blank" href="card.php?id=<?php echo $row['owner_id'];?>">Visit this here</a>
                            </div>  
                        </div>
                    </div>
                    
                    
                    
               
          
     <?php  
      
        }
        
     ?>
     </div>
     </section> 
       </div>
     
      </header>  
   
       
    
    <main>
    <section id="tutorial-3">
      <div class="section-title">
        <h3 class="text-left">Cloth</h3>
       
      </div>  
      <div class="row d-flex ">
        <?php
        include 'connection.php';
        $pic = mysqli_query($link,"SELECT * FROM product WHERE product_type='Cloth'");
        while($row = mysqli_fetch_array($pic)){
        ?>
         
     
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                         
                        
                            <img class="card-img-top" src=<?php echo "./image/".$row['Image'];?> alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row["product_name"];?></h4>
                                <p class="card-text"><?php echo $row["product_description"];?></p>
                                <a class="card-link stretched-link" target="_blank" href="card.php?id=<?php echo $row['owner_id'];?>">Visit this here</a>
                            </div>  
                        </div>
                    </div>
                    
                    
                    
               
          
     <?php  
      
        }
        
     ?>
     </div>
     

    </section>  
    </div> 
    <section id="tutorial-2">
      <div class="section-title">
        <h3 class="text-left">Car factory</h3>
       
      </div>  
      <div class="row d-flex ">
        <?php
        include 'connection.php';
        $pic = mysqli_query($link,"SELECT * FROM product WHERE product_type='car'");
        while($row = mysqli_fetch_array($pic)){
        ?>
         
     
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                         
                        
                            <img class="card-img-top" src=<?php echo "./image/".$row['Image'];?> alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row["product_name"];?></h4>
                                <p class="card-text"><?php echo $row["product_description"];?></p>
                                <a class="card-link stretched-link" target="_blank" href="card.php?id=<?php echo $row['owner_id'];?>">Visit this here</a>
                            </div>  
                        </div>
                    </div>
                    
                    
                    
               
          
     <?php  
      
        }
        
     ?>
     </div>
     
    </section> 
    </div>  
      
        
    <section id="tutorial-1">
      <div class="section-title">
        <h3 class="text-center">Invest sector</h3>
        <hr class="hr-style" style="border-color:black">
      </div>  
      <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="image\sarah-dorweiler-gUPiTDBdRe4-unsplash 1.png" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">Cloth Market</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                               
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="image\joey-banks-YApiWyp0lqo-unsplash 1.png" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">Car</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="image\simone-hutsch-_wpce-AsLxk-unsplash 1.png" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">Hotel Business</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                
                            </div>

                        </div>
                    </div>
                    
                </div>

    </section>
    <section id="tutorial-4">
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
        </section> 

          
    
    </main>
    <footer>
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
  </div>   
    
                
              
    


    <script type="text/javascript" src ="js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src ="js/slick.min.js"></script>
    <script type="text/javascript" src ="js/my.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>