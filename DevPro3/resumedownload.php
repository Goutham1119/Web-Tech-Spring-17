<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Resume Download</title>
      <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <style>
         #draggable-1 { 
           width: 100px; height: 70px; float: left;
           margin: 22px 5px 10px 40; text-align: center;
         }
         #droppable-1 { 
            width: 150px; height: 70px;padding: 0 0 0 0; float: right; 
           margin: 10px; text-align: center;	
         }
      </style>
	  <style type="text/css">
 body{
   	background-repeat: no-repeat;
    	background-size: auto;
    	background-color:#fce8ed;
    }
    #titlehead{
    	font-family:Georgia;
    	Color: red;
    	text-align:left;
    	margin-left:40px;
    }
    
div{
margin-top: 10px;
margin-left: 50px;
color: Red;
}

</style>
      <script>
         $(function() {
            $( "#draggable-1" ).draggable();
            $( "#droppable-1" ).droppable({
			drop: function (){
			alert ("Thanks for Confirmation. Your Download Begins Now!!")
			window.location.href="GowthamResume.pdf";
			}
			})
			});  
      </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96357842-1', 'auto');
  ga('send', 'pageview');

</script>
   </head>
<script>
	$(document).ready(
         function() {
            $( ".btnr" ).on('click',function(){
         		alert ("Drag and Drop Before Download")
			});
});  
      </script>
   <body >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Gowtham's Blog</a>
    </div>
    <ul class="nav navbar-nav">
<li> <a href="./index.php"> Home </a> </li>
<li> <a href="./about.php"> About </a> </li>
<li> <a href="./skills.php"> Skills </a> </li>
<li> <a href="./contact.php"> Contact Information </a> </li>
<li> <a href="./experience.php"> Experience </a> </li>
<li> <a class="active" href="./resumedownload.php">Resume Download</a> </li>
</ul>

<ul class="nav navbar-nav navbar-right">
<button class="btn btn-primary navbar-btn" onclick="goBack()">Previous Tab</button>
</ul>

  </div>
</nav><div>

<body>   
       <div> Download My Resume by dragging the box to target </div>
      <br><div id="draggable-1" class="ui-widget-content">
         <p>Drag Me to Yellow Target</p>
      </div>
      <div id="droppable-1" class="ui-widget-header">
         <p>This is your Yellow Target</p>
      </div> <br><br><br><br><br><br><br><br>
<div>
  <button class="btnr"> Download My Resume </button>

</div>

<br> <br>
</body>
</html>