<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dashboard-new.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/forms.css" >
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    
<div class="row navbar_header">
        <div class="col-lg-12">
            <h1 style="color:white"><b>&nbsp;&nbsp;&nbsp;Happy Hearts Foundation</b></h1>
        </div>
</div><!-- header -->
<div class="container">
	<?php
	session_start();
	$un=$_SESSION['XUSER'];
	$_SESSION['XUSER']=$un;

	
	?>
	<div id="form">
	<form action='survey.php' method="post">
	<h1> Enter the following details</h1>
	Enter the name of the school:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name='school' id='school' cols='15'>
	<option value="ABC Public school"> ABC public school</option>
	<option value="XYZ Public school"> XYZ public school</option>
	<option value="PQR Public school"> PQR public school</option>
	<option value="MNO Public school"> MNO public school</option>
	<option value="Next school"> Next school</option>
	<option value="New University school"> New University school</option>
	</select><br><br>
	Enter the country to which school belongs:&nbsp&nbsp&nbsp&nbsp<select name='country' id='country' cols='15'>
	<option value="Nepal"> Nepal</option>
	<option value="India"> India</option>
	<option value="Indonesia"> Indonesia</option>
	</select><br>
	<h1>Rate the following factors on a grade of 5</h1>
	<br>
	<p> Q1) How prone is the area to natural disasters?</p>
	<input type="radio" name="q1" value="1">Grade 1</input><br>
	<input type="radio" name="q1" value="2">Grade 2</input><br>
	<input type="radio" name="q1" value="3">Grade 3</input><br>
	<input type="radio" name="q1" value="4">Grade 4</input><br>
	<input type="radio" name="q1" value="5">Grade 5</input><br>
	<br>
	
	<p> Q2)Estimated cost of rebuilding and maintenance of school</p>
	<input type="radio" name="q2" value="1">less than 10000</input><br>
	<input type="radio" name="q2" value="2">10000-20000</input><br>
	<input type="radio" name="q2" value="3">20000-30000</input><br>
	<input type="radio" name="q2" value="4">30000-40000</input><br>
	<input type="radio" name="q2" value="5">40000 and higher</input><br>
	<br>
	
	<p> Q3)Willingness of community</p>
	<input type="radio" name="q3" value="1">Grade 1</input><br>
	<input type="radio" name="q3" value="2">Grade 2</input><br>
	<input type="radio" name="q3" value="3">Grade 3</input><br>
	<input type="radio" name="q3" value="4">Grade 4</input><br>
	<input type="radio" name="q3" value="5">Grade 5</input><br>
	<br>
	
	
	<p> Q4)Availability of resources for rebuilding</p>
	<input type="radio" name="q4" value="1"> Grade 1</input><br>
	<input type="radio" name="q4" value="2">Grade 2</input><br>
	<input type="radio" name="q4" value="3">Grade 3</input><br>
	<input type="radio" name="q4" value="4">Grade 4</input><br>
	<input type="radio" name="q4" value="5">Grade 5</input><br>
	<br>
	
	<p> Q5)How sustaining the infrastructure is?</p>
	<input type="radio" name="q5" value="1"> Grade 1</input><br>
	<input type="radio" name="q5" value="2">Grade 2</input><br>
	<input type="radio" name="q5" value="3">Grade 3</input><br>
	<input type="radio" name="q5" value="4">Grade 4</input><br>
	<input type="radio" name="q5" value="5">Grade 5</input><br>
	<br>
	
	<p> Q6) What is the impact on beneficiaries?</p>
	<input type="radio" name="q6" value="1"> Grade 1</input><br>
	<input type="radio" name="q6" value="2">Grade 2</input><br>
	<input type="radio" name="q6" value="3">Grade 3</input><br>
	<input type="radio" name="q6" value="4">Grade 4</input><br>
	<input type="radio" name="q6" value="5">Grade 5</input><br>
	<br>
	
	<p> Q7) How much is the community involvement?</p>
	<input type="radio" name="q7" value="1"> Grade 1</input><br>
	<input type="radio" name="q7" value="2">Grade 2</input><br>
	<input type="radio" name="q7" value="3">Grade 3</input><br>
	<input type="radio" name="q7" value="4">Grade 4</input><br>
	<input type="radio" name="q7" value="5">Grade 5</input><br>
	<br>
	
	<p> Q8)Response and involvement of principal</p>
	<input type="radio" name="q8" value="1"> Grade 1</input><br>
	<input type="radio" name="q8" value="2">Grade 2</input><br>
	<input type="radio" name="q8" value="3">Grade 3</input><br>
	<input type="radio" name="q8" value="4">Grade 4</input><br>
	<input type="radio" name="q8" value="5">Grade 5</input><br>
	<br><br>
	<input type="file" name="pic" id="pic" >
	<br><br>
	<p>Comments:</p> <textarea name="comment" id="comment" rows="5" cols="100"> </textarea>
	</div>
<center>
<br><br>
	<input type="submit" onclick="alert('The form will be submitted')" value="submit">
	</form>
	</center>
      <!-- FOOTER -->
    <br><br><br><br><br><br><br><br><br><br>  <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
