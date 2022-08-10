<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home | 1Market</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color:teal;
      -webkit-text-stroke-color: green;

    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      max-height: 500px;
  }

  .col-sm-4 {
      max-width: 500px;
      max-height: 100%;
  }

  #stuff{
 position:relative;
background: black;
height: 50px;
width: 100px;
z-index: 2;
}

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 100px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="logo"><img src="stockImages/1MarketLogoWhite.png" width="100px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="stockImages/NikeJordan12.jpeg" alt="Image">
        <div class="carousel-caption">
          <h3>Jordans</h3>
          <p>More colours than you can think of</p>
        </div>
      </div>

      <div class="item">
        <img src="stockImages/NikeCollectionImages.jpeg" alt="Image">
        <div class="carousel-caption">
          <h3>Nike</h3>
          <p>Discover the largest Nike Collection you have ever seen!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>Some Cool Offers</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="stockImages/NikeJordanTrainer.jpeg" class="img-responsive" style="width:100%" alt="Image">
      <p>Nike Jordan 4s Taupe Haze</p>
    </div>
    <div class="col-sm-4">
      <img src="stockImages/NikeTrainer1.jpeg" class="img-responsive" style="width:100%" alt="Image">
      <p>Yeezy 700 Waverunner</p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some Text</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>1Market Ltd. | Birmingham, England, UK | Contact us today</p>
</footer>

</body>
</html>
