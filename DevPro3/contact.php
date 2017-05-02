<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<title>Contact Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" type="text/css" href="styles.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96357842-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Gowtham's Blog</a>
    </div>
    <ul class="nav navbar-nav">
<li> <a href="./index.php"> Home </a> </li>
<li> <a href="./about.php"> About </a> </li>
<li> <a href="./skills.php"> Skills </a> </li>
<li> <a class="active" href="./contact.php"> Contact Information </a> </li>
<li> <a href="./experience.php">Experience </a> </li>
<li> <a href="./resumedownload.php">Resume Download</a> </li>
</ul>

<ul class="nav navbar-nav navbar-right">
<button class="btn btn-primary navbar-btn" onclick="goBack()">Previous Tab</button>
</ul>

  </div>
</nav>



<div id="contact">

<div align="left">
<h4 style="color: #eb0000;"><i>E-Mail ID: </i>Gowtham.Subramanian1@marist.edu</h4> 
<br>

<h4 style="color: #eb0000;"><i>Phone Number:</i> +1(516)-288-2204

</h4>

<form action="contact.php" name="form" method = "post">
    <br>  <br> <label for="fname">First Name <span class="glyphicon glyphicon-user"></span></label>
    <input type="text" id="fname" name="firstname" placeholder="Your First Name.." width=30%><br><br>

    <label for="lname">Last Name <span class="glyphicon glyphicon-user"></span></label>
    <input type="text" id="lname" name="lastname" placeholder="Your Last Name.." width=30%><br><br>
	<label for="email">Your email <span class="glyphicon glyphicon-envelope"></span></label>
	<input type="text" id="email" name="youremail" placeholder = "Enter Your Email Address" width=30%><br><br>
	
    <label for="subject">Subject <span class="glyphicon glyphicon-book"></span></label>
    
	 		 		<select id="reasonDetails" name="reason">    					
  					</select><br>
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  					<script>
						var $select = $('#reasonDetails');
						$.getJSON("reason.json", function(data) {
						console.log(data)
							for(var i=0; i<data['reasonDetails'].length;i++){
								$select.append('<option id="'+ data['reasonDetails'][i]['id']+'">'+ data['reasonDetails'][i]['name']+'</option>' );
							}
						});
					</script><br>
	<label for="message">Message <span class="glyphicon glyphicon-pencil"></span></label>
	<br>
	<textarea name="message" rows="5" cols="100" placeholder = "Write your message here"></textarea><br>
	
    <input type="submit" value="Submit" name="send">
  </form>


</body>
</html>

<?php

$link= mysqli_connect("localhost","root","","gowthamdb");
if (isset($_POST['send']))
 {
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $subject = ($_POST['reason']);
       $message = ($_POST['message']);
       $email = $_POST['youremail'];
       
       

       // Mail Stuff
       $to = "gouthugoutham92@gmail.com";
       $subject1 = "New Form Submitted";
       $txt = "New Contact form has been Submitted";
       $headers = "From: donotreply@fmt.com" ;


       date_default_timezone_set("America/New_York");
       $timestamp = date('Y-m-d G:i:s');
       
       if (isset($_POST['youremail'])==true && empty($_POST['youremail'])==false)
        {
        $email=$_POST['youremail'];
        if (filter_var($email,FILTER_VALIDATE_EMAIL)==true)
         { 
                    
                    $query="INSERT INTO contact (firstname,lastname,subject,email,message,time_stamp) 
                    values ('$firstname','$lastname','$subject','$email','$message','$timestamp')";
                    $stmt=$link->prepare($query);
                    if($stmt->execute()==true)
                        {
                             mail($to,$subject1,$txt,$headers);
                             echo "<script>alert(' Submitted Successful')</script>";
                             EXIT();
                             //header('Location:index.php');
                        }
                
        
    }
        else
        {
            echo "<script>alert('Invalid Email Address')</script>";
            die();
        }
    }
}
?>