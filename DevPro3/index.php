<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<title> Gowtham's Blog </title>
<meta name="author" content="Gowtham">
<meta name="description" content="DevelopmentProject1">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="HTML,CSS,JavaScript,Gowtham,devproject">

<link rel="stylesheet" type="text/css" href="styles.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      height:50 width: 25;
      margin: auto;
  }
  .container-fluidss {
      padding-top: 5px; padding-left: 500px;      
  }

  </style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96357842-1', 'auto');
  ga('send', 'pageview');

</script>

<script>

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome back " + user);
    } else {
       user = prompt("Enter your Name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}

</script>
<body onload="checkCookie()">
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
      <a class="navbar-brand" href="#">Gowtham's Blog</a>
    </div>
    <ul class="nav navbar-nav">
      <li> <a class="active" href="#home"> Home </a> </li>
<li> <a href="./about.php"> About </a> </li>
<li> <a href="./skills.php"> Skills </a> </li>
<li> <a href="./contact.php">Contact Information </a> </li>
<li> <a href="./experience.php">Experience </a> </li>
<li> <a href="./resumedownload.php">Resume Download</a> </li>
</ul>

  </div>
</nav>
<div class="container-fluidss">
  <br>
  <div id="myCarousel" class="carousel slide" style="width: 350px; height:90; margin: 0 auto data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="1.jpg" class="img-rounded alt="Gowtham" width="304" height="236">
        <div class="carousel-caption">
          <h3 style="color: #eb0000;">Gowtham</h3>
          <p style="color: #eb0000;"><br> <br> Masters Student from India</p>
        </div>
      </div>

      <div class="item">
        <img src="2.jpg" class="img-rounded alt="Sachin" width="304" height="236">
        <div class="carousel-caption">
          <h3 style="color: #ff6600;">Master Blaster</h3>
          <p style="color: #ff6600;"><br> <br> Cricketing God</p>
        </div>
      </div>
    
      <div class="item">
        <img src="3.jpg" class="img-rounded alt="Gamer" width="304" height="236">
        <div class="carousel-caption">
          <h3 style="color: #ff6600;">Game Boy</h3>
          <p style="color: #ff6600;"><br> <br> Wake up, Game, Eat, Game, Sleep, Game, Repeat</p>
        </div>
      </div>

      <div class="item">
        <img src="4.jpg" class="img-rounded alt="Apple Lover" width="304" height="236">
        <div class="carousel-caption">
          <h3 style="color: #ff6600;">Apple Lover</h3>
          <p style="color: #ff6600;"><br> <br> Fascinated by quality and consistency</p>
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</h3>

<footer>
Copyright © Gowtham Subramanian
</footer>

<script src="app.js">
</script>
</body>

</html>