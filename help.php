<!DOCTYPE html>
<html>
<head>
	<title>Help</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">


</head>
<body>

<!--Navigation bar and the various menu items-->

<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<a href="index.php" class="navbar-brand">Moyale Raha Reservation</a>
		<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="#contact" data-toggle= "modal">Contact Us</a></li>
				<li><a href="adminSignIn.php">Administrator</a></li>
				<li class="active"><a href="help.php">Help</a></li>
			</ul>
		</div>
	</div>

</div>

<!-- Main jumbotron -->
 <div class="container" >
    <div class="jumbotron" id="topjumbotron">
      <div class="container">
        <h1>Moyale Raha</h1>
        <p>Your one stop online bus reservation service.</p>
      </div>
    </div>
    </div>

    <!--middle jumbotron-->
 <div class="container">
<div class="jumbotron" id="middlejumbotronDetails">
<div><h2>Making a reservation</h2></div>
<div id="accordion">
  <h3>Specifying source and destination</h3>
  <div>
    <h6><p>
    From the main reservation page, specify the following:<br/>
    1. Specify where you are travelling from by clicking on the field labelled 'From'. <img src="images/help/from.jpg"><br/>
    From the list of destinations click on your desired choice.
     </p>
     <p>
    2. Specify where you are travelling to by clicking on the field labelled 'To'. <img src="images/help/to.jpg"><br/>
    From the list of destinations click on your desired choice.
     </p>
     <p>
    3. Pick your date of travel by clicking on the field labelled 'Date of Departure' <img src="images/help/date.jpg"><br/>
    The calender shown below will pop up. Click on a date.<br/><img src="images/help/calender.jpg"><br/>
     </p>
      <p>
    4. Specify whether your trip is a one-way or a two-way trip. 
    A two-way trip costs twice as much as a one-way. <br/><img src="images/help/triptype.jpg"><br/>
     </p>
     <p>
    5. View the amount of fare charged for your selections so far. <img src="images/help/fareperseat.jpg"><br/>
     </p>
     <p>
    6. Click on the button labelled 'Check seat availability' to proceed. <img src="images/help/checkbtn.jpg"><br/>
    </p>

     </h6>
  </div>
  <h3>Selecting your seat(s) and filling in your personal details</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>payment</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>


<div class="container">
<div class="container" >
			
			

			</div>
			</div>
			</div>
			</div>


<!--page footer-->

<div class="container">
<div class="navbar navbar-default navbar-static-bottom">
	<div class="container">
		<p class="navbar-text"> Copyright@ 2014 by Moyale Raha. All Rights Reserved.</p>
	</div>
</div>
</div>

<!--Contact us modal with a fill-in form-->

<div class= "modal fade" id="contact" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-horizontal" action="contactMoyaleRaha.php" method="post">
			<div class="modal-header">
				<h4>Contact Moyale Raha</h4>

			</div>
			<div class="modal-body">
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-2 control-label" >Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" placeholder="Full Name" name="name">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-email" class="col-lg-2 control-label" >Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="contact-email" name="email" placeholder="you@example.com">
						</div>
				</div>

				<div class="form-group">
				
					<label for="contact-msg" class="col-lg-2 control-label" >Message:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="8" name="message"></textarea>
						</div>
				</div>

			</div>

<div class="modal-footer">
				<a class="btn btn-default" data-dismiss="modal"> Cancel</a>
				<button class="btn btn-primary" type="submit" name="submit">Send</button>
			</div>
			</form>
		</div>
	</div> 
</div>



<script src="js/jquery.js"></script>
<script src="js/code.js"></script>2
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/bootstrap.js"></script>





</body>
</html>