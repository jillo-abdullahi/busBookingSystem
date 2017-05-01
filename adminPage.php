<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

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
				<li class="active"><a href="#">Administrator</a></li>
			</ul>
		</div>
	</div>
	</div>
<!--end of navigation bar-->
<!--admin notification at the top of the page-->
<div class="container" id="admin_notification" style="color:black;">
				<?php

				require 'libs/adminStuffForlogin.php';
				?>
</div>

<!--middle jumbotron-->
 <div class="container">
			<div class="jumbotron" id="middlejumbotronDetails">
					<div class="container">
							<div class="col-lg-6">
									<table class="table table-striped table-bordered" id="admin_table" width="600" border="1" cellpadding="1" cellspacing="1">
										<tr>
											
											<th>Name</th>
											<th>Email</th>
											<th>Message</th>


										</tr>
										<?php require 'libs/adminStuff.php';?>

									</table>
							</div>
						<div class="col-lg-6" >
							<table class="table table-striped table-bordered" id="admin_table" width="600" border="1" cellpadding="1" cellspacing="1">
										<tr>
											
											<th>Bus Registration Number</th>
											<th>Departure Time</th>
											<th>Capacity</th>
											<th>Driver Name</th>


										</tr>
										<?php require 'libs/adminBusView.php';?>

									</table>
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


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>