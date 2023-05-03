<?php

include 'connection.php';
session_start();


if(isset($_POST['submit'])){
    $owner_id= $_SESSION['owner_id'];;
    $product_name= $_POST['product_name'];
    $product_type= $_POST['product_type'];
    $product_description= $_POST['product_description'];
    $Headline= $_POST['Headline'];
    $highlight1= $_POST['highlight1'];
    $highlight2= $_POST['highlight2'];
    $highlight3= $_POST['highlight3'];
    $highlight4= $_POST['highlight4'];
    $highlight5= $_POST['highlight5'];
    $More_describtion= $_POST['More_describtion'];
    if(isset($_FILES["uploadfile"]) && !empty($_FILES["uploadfile"]["name"])) {
      $filename = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = "./image/" . $filename;

      // Check if the file was properly uploaded
      if (!is_uploaded_file($tempname)) {
          die("File upload failed");
      }

      // Move the uploaded file to the target directory
      if (!move_uploaded_file($tempname, $folder)) {
          die("File upload failed");
      }
  } else {
      die("No file uploaded");
  }

    
    
   
    

    $sqy="insert into product (owner_id,product_name,product_type,product_description,Headline,highlight1,highlight2,highlight3,highlight4,highlight5,More_describtion,Image)values('$owner_id','$product_name','$product_type','$product_description','$Headline','$highlight1','$highlight2','$highlight3','$highlight4','$highlight5','$More_describtion','$filename')";
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
    <title>form</title>
  
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
    
    <div class="container mt-3">
 
  <form action="form.php" method="post" enctype="multipart/form-data">
       
      <label for="product_name" class="form-label">product name:</label>
      <input type="text" class="form-control" name="product_name">
    
    
      <label for="product_type" class="form-label">product type:</label>
      <input type="text" class="form-control" name="product_type">
    
    
      <label for="product_description" class="form-label">product description:</label>
      <input type="text" class="form-control" name="product_description">
      
      <label for="Headline" class="form-label">Headline</label>
      <input type="text" class="form-control" name="Headline">
      
      <label for="highlight1" class="form-label">highlight1</label>
      <input type="text" class="form-control" name="highlight1">
      
      <label for="highlight2" class="form-label">highlight2</label>
      <input type="text" class="form-control" name="highlight2">
      
      <label for="highlight3" class="form-label">highlight3</label>
      <input type="text" class="form-control" name="highlight3">
      
      <label for="highlight4" class="form-label">highlight4</label>
      <input type="text" class="form-control" name="highlight4">
      
      <label for="highlight5" class="form-label">highlight5</label>
      <input type="text" class="form-control" name="highlight5">
      
      <label for="More_describtion" class="form-label">More_describtion</label>
      <input type="text" class="form-control" style="width: 1300px;
  height: 100px;"name="More_describtion">
    
      <label for="" class="form-label">Image:</label>
      <input type="file"  class="form-control"name="uploadfile" ><br>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<hr class="hr hr-blurry" />

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
