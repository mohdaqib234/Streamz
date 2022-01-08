<?php
      include 'dbh.php';
?>      

<!DOCTYPE html>
<html lang="en">
<head>
<title>Streamz</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
  .card:hover{
    top:-13px;
  }
  

</style>

</head>
<body style="background-color: black;">
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: rgba(0, 0, 0, 0.945);">
 <b> <a class="navbar-brand ml-5" href="index.php" style="color: #f79526;font-size: 30px;text-shadow: 3px 3px 3px #070707, 0 0 5px #000000;">Streamz</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ml-3">
        <a class="nav-link" href="index.php" style="font-size:20px;">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ml-3">
        <a class="nav-link" href="#" style="font-size: 20px;">Web Series</a>
      </li>
      <li class="nav-item active ml-3">
        <a class="nav-link" href="#Movie" style="font-size: 20px;">Movies</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

 <div class="article-container">
   <?php
        $sql="SELECT*FROM article";
        $result=mysqli_query($conn,$sql);
        $queryResults=mysqli_num_rows($result);

        if ($queryResults>0){
          while ($row=mysqli_fetch_assoc($result)){
            
          }
        }
   
   ?>
 </div>

      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="background-color: red;color: white;">Search</button>
    </form>
    <ul class="navbar-nav ml-3 mr-3">
        <li class="nav-item active">
            <a class="nav-link" href="login.html" style="font-size: 20px;">LogIn</a>
          </li>
    </ul>
  </div>
</nav>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="pirates.html"><img class="d-block w-100" src="pired.jpg" alt="First slide"></a>
      </div>
      <div class="carousel-item">
        <a href="luci.html"><img class="d-block w-100" src="lucifered.jpg" alt="Second slide"></a>
      </div>
      <div class="carousel-item">
        <a href="13.html"><img class="d-block w-100" src="13e.jpg" alt="Third slide"></a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  
  <div namespace="Movie" style="background-color: black;">
    
    <p style="color: gray;margin-top: 15px;margin-left: 15px;font-size: larger;"><b>Action & Adventure ></b></p>
    <div class="card-group" style="margin-left: 15px;margin-right: 15px;">
      
      <div class="card" style="border: none;">
        <a href="pirates.html"><img class="card-img-top" src="ff9.jpg" alt="Card image cap"></a>
        
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
        <a href="luci.html"><img class="card-img-top" src="guye.jpg" alt="Card image cap"></a>
       
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
        <a href="13.html"><img class="card-img-top" src="spidy.jpg" alt="Card image cap"></a>
       
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
        <a href="pirates.html"><img class="card-img-top" src="john.jpg" alt="Card image cap"></a>
        
      </div>

      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="venom.jpg" alt="Card image cap"></a>
        
      </div>

    </div>
  </div>

  <div style="background-color: black;">
    
    <p style="color: gray;margin-top: 15px;margin-left: 15px;font-size: larger;"><b>Horror ></b></p>
    <div class="card-group" style="margin-left: 15px;margin-right: 15px;">
      
      <div class="card" style="border: none;">
      <a href="pirates.html"><img class="card-img-top" src="conju.jpg" alt="Card image cap"></a>
        
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="nun.jpg" alt="Card image cap"></a>
       
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="mali.jpg" alt="Card image cap"></a>
       
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="invi.jpg" alt="Card image cap"></a>
        
      </div>

      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="co.jpg" alt="Card image cap"></a>
        
      </div>

    </div>
  </div>

  <div style="background-color: black;">
    
    <p style="color: gray;margin-top: 15px;margin-left: 15px;font-size: larger;"><b>Bollywood ></b></p>
    <div class="card-group" style="margin-left: 15px;margin-right: 15px;">
      
      <div class="card" style="border: none;">
      <a href="pirates.html"><img class="card-img-top" src="milkha.jpg" alt="Card image cap"></a>
        
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="tanha.jpg" alt="Card image cap"></a>
       
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="raees.jpg" alt="Card image cap"></a>
       
      </div>
      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="bads.jpg" alt="Card image cap"></a>
        
      </div>

      <div class="card" style="margin-left: 10px;border: none;">
      <a href="pirates.html"><img class="card-img-top" src="antim.jpg" alt="Card image cap"></a>
        
      </div>

    </div>
  </div>
<div>
  <span style="color:blue;">Terms & Privacy Notice</span>
  <span>Send us Feedback</span>
  <span>Help</span>
  <span style="color: gray;">1996-2021,Streamz.com,Inc. or its affiliates</span>
</div>
</body>
</html>