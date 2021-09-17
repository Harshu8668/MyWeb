<!DOCTYPE html>
<html lang="en">
<head>
<!-- required metatags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title>Basic Banking System</title>
</head>
<!-- navbar -->
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="logo2.jpg" alt="DBS Bank" style="width: 70px;"> DBS BANK
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href=" index.php " style="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about" style="">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services" style=""> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" style="">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends -->
    
    
  <!--slider-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.png" class="d-block w-100 " alt="..." height=500 width=100>
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" class="d-block w-100" alt="..."height=500 width=100>
    </div>
    <div class="carousel-item">
      <img src="img3.png" class="d-block w-100" alt="..."height=500 width=100>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!--slider ends-->
    
    
    
<!-- About section -->
<section id="about">
<h1 class="display-5 text-black text-center mt-4"><u>About Us</u></h1>
<br>
<div class="center">
  <img src="about%20us.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="..." width="300" height="200">
  <p style="text-align: center;">
    DBS Bank Ltd is a Singaporean multinational banking and financial services corporation headquartered in Marina Bay, Singapore. The company was known as The Development Bank of Singapore Limited, before the present name was adopted on 21 July 2003 to reflect its changing role as a global bank.
  </p>

  <p style="text-align: center;">
    We are Banking System where you can do basic banking.
Users can view other user's profile , transfer Money and can also view past Transactions betweeen diffrent users
  </p>
</div>
</section>
    
   <br>
    
<!-- services section -->
<section class="container" id="services">
<h1 class="display-5 text-black text-center mt-4"><u>Services</u></h1><br><br>
<div class="container text-center">
<div class="row" >
<div class="card col-md-3 mx-auto" style="width: 15rem; height: 270px">
          <img src="users.gif" class="card-img-top mt-3 img" alt="all users profile">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <a href="transferMoney.php" class="btn btn-primary" style="background-color: black; color: white"> View Users Profile</a>
          </div>
        </div>
    <br>
        <div class="card col-md-3 mx-auto" style="width: 15rem; height: 270px">
          <img src="transaction.gif" class="card-img-top mt-3 img" alt="users past transaction">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <a href="transactionhistory.php" class="btn btn-primary" style="background-color: black; color: white">Transfers History</a>
          </div>
        </div>
    <br>
        <div class="card col-md-3 mx-auto" style="width: 15rem; height: 270px">
          <img src="transfer%20money.gif" class="card-img-top mt-3 img" alt="transfer money">
          <div class="card-body">
            <h5 class="card-title" id="transmoney"></h5>
            <p class="card-text"></p>
            <a href="transferMoney.php" class="btn btn-primary" style="background-color: black; color: white">Transfer Money</a>
          </div>
        </div>
    <br>
      </div>
    </div>
  </section>
<br>
    
    
  <!-- contact us User form -->
    
   
<section id="contact"> 
<h1 class="display-5 text-black text-center mt-4"><u>Contact Us</u></h1><br><br>
<div class="container">
<div class="row justify-content-center mb-4">

<div class="col-6 col-lg-6 col-md-6 col-sm-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.64332333245!2d72.7410979659601!3d19.082522323529886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1631071828949!5m2!1sen!2sin" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="col-6 col-lg-6 col-md-12 col-sm-12 text-dark "><label>Head Office</label>
<div class="icons">
<span><i class="fas fa-map-marker-alt"></i></span> <p>R NO 7, 1st Floor, Churchgate Apollo Bandar, Opposite Sun City Apollo Hotel, Colaba, Mumbai, Maharashtra 400020</p>

<i class="fas fa-phone-square-alt"></i><p>+91 8668464979</p>
<i class="fas fa-globe-asia"></i><p>dbsbank123@gmail.com</p>
</div>
</div>
</div>
</div>
 </section>
  
   <!-- Footer -->
<footer class="page-footer font-small blue bg-dark text-light">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright: Made by Harshali Patil.
   
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</body>
</html>