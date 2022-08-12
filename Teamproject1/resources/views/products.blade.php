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

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Jordan 4 Black Cat</div> <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Size
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">9</a>
    <a class="dropdown-item" href="#">10</a>
    <a class="dropdown-item" href="#">11</a>
  </div>
</div>
        <div class="panel-body"><img src="img/Jordan4.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">AIR JORDAN IV The Air Jordan IV debuted in 1989 and was designed by Tinker Hatfield. It features lightweight netting and plastic wings on the upper as well as visible Max Air.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Yeezy Boost 350</div> <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Size
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">9</a>
    <a class="dropdown-item" href="#">10</a>
    <a class="dropdown-item" href="#">11</a>
  </div>
</div>
        <div class="panel-body"><img src="img/Yeezy.jpeg" class="img-responsive" style="width:85%" alt="Image"></div>
        <div class="panel-footer">The YEEZY BOOST 350 V2 features an upper composed of re-engineered Primeknit. The post-dyed monofilament side stripe is woven into the upper. Reflective threads are woven into the laces. The midsole utilizes adidas' innovative BOOST™ technology.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Nike Vapor Maxplus</div> <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Size
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">9</a>
    <a class="dropdown-item" href="#">10</a>
    <a class="dropdown-item" href="#">11</a>
  </div>
</div>
        <div class="panel-body"><img src="img/Vapormaxplus.jpeg" class="img-responsive" style="width:85%" alt="Image"></div>
        <div class="panel-footer">The Nike Air VaporMax Plus looks to the past and propels you into the future. Nodding to the 1998 Air Max Plus with its floating cage, padded upper and heel logo, it adds revolutionary VaporMax Air technology to ramp up the comfort and create a modern look.</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Nike AirForce 1</div> <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Size
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">9</a>
    <a class="dropdown-item" href="#">10</a>
    <a class="dropdown-item" href="#">11</a>
  </div>
</div>
        <div class="panel-body"><img src="img/Airforce1.jpeg" class="img-responsive" style="width:85%" alt="Image"></div>
        <div class="panel-footer">The Air Force 1 features an upper that is most frequently dressed in leather, a large Swoosh across the lateral and medial sides, perforated toe boxes, metal lace dubraes, and an Air-encapsulated midsole with signature “AIR” text near the rear.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Jordan 1 Mocha</div> <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Size
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">9</a>
    <a class="dropdown-item" href="#">10</a>
    <a class="dropdown-item" href="#">11</a>
  </div>
</div>
        <div class="panel-body"><img src="img/Jordan1.jpeg" class="img-responsive" style="width:85%" alt="Image"></div>
        <div class="panel-footer">The Air Jordan 1 High debuted in 1985 as the first signature sneaker developed by Nike for Michael Jordan. The Peter Moore designed performance basketball sneaker featured a simple Nike Dunk inspired design that incorporated the Nike Swoosh and the Jordan Wings logo and featured Nike Air.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Nike Dunk Low</div> <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Size
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">9</a>
    <a class="dropdown-item" href="#">10</a>
    <a class="dropdown-item" href="#">11</a>
  </div>
</div>
        <div class="panel-body"><img src="img/Nike.jpeg" class="img-responsive" style="width:85%" alt="Image"></div>
        <div class="panel-footer">Nike Dunks have been around since 1985. They released as a high-top basketball sneaker. “Be true to your school'' was Nike's first marketing campaign for the Nike Dunks. It offered college basketball teams a way to wear their own colorway of Dunks. Last year Nike released these “Be true to your school” Dunks again.</div>
      </div>
    </div>
  </div>
</div><br><br>




<footer class="container-fluid text-center">
    <p>1Market Ltd. | Birmingham, England, UK | Contact us today</p>
</footer>

</body>
</html>
