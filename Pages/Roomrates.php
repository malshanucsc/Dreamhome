<!DOCTYPE html>
<html>
<head>
	<title>Dream Home</title>
	<link rel="stylesheet" type="text/css" href="../Assets/CSS/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Assets/CSS/mycss.css">

</head>
<body>

<div id="upbanner" class="col-md-12" >

	<div class="col-md-2" id="banner-image" >
	<img  src="../Assets/Images/guest.jpeg" alt="..." class="img-responsive">
		
	</div>
	<div id=bannertopic class="col-md-6">
		
	<h1>
		Your Dream Home
	</h1>
	</div>
<br><br><br><br>
<br>



</div>
<div class="col-md-12" id="upmenu">
<div class="col-md-10 ">
 <nav class="navbar navbar-default" id="upnav">
  <ul class="nav navbar-nav">
    <li><a href="../index.php">Home</a></li>
    <li><a href="Reviews.php">Reviews</a></li>
    <li><a href="Services.php">Services</a></li>
    
    <li id="active"><a href="Roomrates.php">Room Rates</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>

</nav>
	
</div>
	
</div>

<div class="col-md-12" id="availability_details">
	<form class="form-horizontal">
		<div class="form group">
			<label class="control-class col-md-3" for="checkin" >Check_In:</label>
			<div class="col-md-9">
				<input type="date" id="checkin">
			</div>	
		
		</div><br><br>
		
		
		<div class="form group">
			<label class="control-class col-md-3" for="checkout" >Check_Out:</label>
			<div class="col-md-9">
				<input type="checkdate" id="checkout">
			</div>	
		
		</div><br><br>
		
		<div class="form group">
			<label class="control-class col-md-3" for="NoOfAdults" >Adults:</label>
			<div class="col-md-9">
				<input type="text" id="NoOfAdults">
			</div>	
		
		</div><br><br>
		
		<div class="form group">
			<label class="control-class col-md-3" for="NoOfhildren" >Children:</label>
			<div class="col-md-9">
				<input type="text" id="NoOfChildren">
			</div>	
		
		</div><br><br>
		
		<div class="form group">
			<div class ="col-sm-offset-3 col-sm-10">
				<input type="button" value="check availability" id="availabilityButton">
			</div>
		</div>
		
	
	
	
	</form>

</div>
</body>
</html>