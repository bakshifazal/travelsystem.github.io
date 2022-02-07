<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<style>
  
.column{

  float: left;
  width: 60%;
  padding: 10px;
}
img{
  width: 500%;
}



 

</style>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Fazal bakshi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a1.jpg" alt="goa" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Goa</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/a2.jpg" alt="goa" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Goa</h3>
        <p>Thank you, goa!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/a3.png" alt="goa" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Goa</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>   

<section class="my-5">
  
  <div class="py-5">

         <h2 class="text-center">About us</h2>
  </div>
  <div class="container-fluid">
  <div class="raw">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/c2.jpg" class="img-fluid" aboutimg>
      
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    
      <h2 class="display-4">I am fazal bakshi.</h2>
      <p class="py-3">Your “About me” page forms the first impression of a company or product, puts a name and a face to your business, and gives website visitor the opportunity to develop a connection with you (a good reason for a visitor to stay on your website!), and it is your best chance to convert more visits to enquiries/more enquiries to customers.
      <p> 
      <a href="about.php" class="btn btn-success">check more</a>
      
    </div>
    
  </div>

</div>
</section>

<section class="my-5">
  
  <div class="py-5">

         <h2 class="text-center">Our services </h2>
  </div>

  <div class="container">
    <div class="raw">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="column">
  <img src="images/c5.jpg" alt="image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        
      </div>
      <div class="raw">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="column">
  <img src="images/c5.jpg" alt="image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        
      </div>
      <div class="raw">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="column">
  <img src="images/c5.jpg" alt="image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        
      </div>  
    </div>
    </div>
</section>
      <section class="my-5">
        <div class="py-5">

         <h2 class="text-center">our Gallery</h2>

         </div>
      </section>
      <div class="glass">
        <img src="images/c6.jpg" style="width:100%;">
      </div>
      <div class="glass">
        <img src="images/a3.png" style="width:100%;">
      </div>
      
 <div class="w-50 m-auto">
   
     <form action="userinfo.php" method="post">
      <div class="form-group">
             <label>Username</label>
             <input type="text" name="User" class="form-control">
      </div>
      <div class="form-group">
             <label>Email ID</label>
             <input type="text" name="Email" class="form-control">
      </div>
      <div class="form-group">
             <label>Mobile</label>
             <input type="text" name="mobile" class="form-control">
      </div>
      <div class="form-group">
             <label>Comment</label>
             <textarea class="form-control" name="Comment">
               
             </textarea>
      </div>
               <button type="submit" class="btn btn-success">Submit</button>

     </form>

     <footer>
       
           <p class="py-3 bg-dark text-white text-center">@Bakshifazalwebsite</p>

     </footer>


 </div>


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>