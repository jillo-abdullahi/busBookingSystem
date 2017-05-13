<!DOCTYPE html>
<html>
  <head>
    <title>Zain Services</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bus reservation">
    <meta name="author" content="Jillo Abdullahi">
   
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!--Google font-->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
   <!--Font-awesome-->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
   <!-- Custom styles-->
   <link href="./css/styles.css" rel="stylesheet">
   <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

   <!--validate form i.e. date-->
   <script type="text/javascript">
				function validateForm()
				{
						var x=document.forms["booking_details"]["departure-date"].value;
						if (x==null || x=="")
						  {
						 alert("Fill in your date of travel");
						  return false;
						  }
			
			
				}
		</script>



  </head>
<body>

<!--Navigation bar and the various menu items-->

<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
	<div class="container-fluid">
	  <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>	
		</button>
		<a class="navbar-brand" href="index.php">Zayn Services</a>
	  </div>
	
	  <div class="collapse navbar-collapse" id ="navHeaderCollapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="#contact" data-toggle="modal">Contact Us</a></li>
				<li><a href="adminSignIn.php">Administrator</a></li>
				<li><a href="help.php">Help</a></li>
			</ul>
		</div>
	</div>
</nav>




<!--Intro-header-->
<div class="intro-header">
  <div class="container">
      <div class="row">
		  <div class="col-sm-12">
		    <div class="intro-message">
              <h1>Proudly serving you.<br>Because the journey is just as important as the destination.</h1>
			</div>
		  </div> 
      </div>
   </div>
</div>

<!--travel specifications form-->

<div class="container">
  <div class="jumbotron">
    <div class="col-lg-6"></div>
		<form class="form-horizontal col-lg-6" id="booking_details" action="seatsPage.php" method="POST" onsubmit="return validateForm()">
			<div class="form-group">
				<label for="source" class="col-lg-4 control-label" >From:</label>
					<div class="col-lg-8">
						<select class="form-control" id="from" name="from">
							<option value="nairobi">Nairobi</option>
							<option value="isiolo">Isiolo</option>
							<option value="marsabit">Marsabit</option>
							<option value="sololo">Sololo</option>
							<option value="moyale">Moyale</option>
						</select>
					</div>
			</div>
			<div class="form-group">
				<label for="destination" class="col-lg-4 control-label" >To:</label>
				<div class="col-lg-8">
					<select class="form-control" id="to" name="to">
						<option value="isiolo">Isiolo</option>
						<option value="nairobi">Nairobi</option>
						<option value="marsabit">Marsabit</option>
						<option value="sololo">Sololo</option>
						<option value="moyale">Moyale</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="departure-date" class="col-lg-6 control-label" >Date of Departure:</label>
				<div class="col-lg-6">
				<input type="text" class="form-control" id="departure-date" name="departure-date" placeholder="Date of departure"/>
				</div>
			</div>
			<div class="form-group col-lg-12">
				<div class="col-lg-6">
			</div>

			<div class="row">
				<div class="radio col-lg-3">
					<label><input type="radio" name="trip-type" id="one-way" value="1" checked>One way</label>
				</div>

												<div class=" radio col-lg-3 pull-right ">
													<label>
														<input type="radio" name="trip-type" id="two-way" value="2">
															Two way
													</label>
												</div>
										
										</div>
							</div>

								<div class="form-group" >
										<label for="source" class="col-lg-4 control-label"></label>
												<div class="col-lg-8">
													<div class="well" id="fare-summary">Fare per seat: Ksh. <span class="value">2000</span></div>
													<input type="hidden" name="fare" id="fare-hidden" value="2000"/>
												</div>
								</div>	

								<div class="form-group" >
										<label for="source" class="col-lg-4 control-label"></label>
											<div class="col-lg-8">
												<p>
													<input type="submit" class="btn btn-primary btn-lg pull-right" role="button" id="btnCheckSeats" value="Check seats availability"/>
												</p>
													
											</div>
								</div>			
							</form>
							
						

					
				</div>
			</div>
		</div>
	</div>

<!--page footer-->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
	  <div class="well">
		<footer class="text-center"> Copyright@ 2017 by Zain Services. All Rights Reserved.</footer>
	  </div>
	</div>
  </div>
</div>

<!--Contact us modal with a fill-in form-->

 <div class= "modal fade" id="contact" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content">
		  <form class="form-horizontal" id="contactUs" method="post" action="contactMoyaleRaha.php">
			<div class="modal-header">
				<h4>Contact Zayn Services</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="contact-name" class="col-lg-2 control-label" >Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="name" id="contact-name" placeholder="Full Name">
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
	            <div class="modal-footer" id="modalfooter">
					<a class="btn btn-default" data-dismiss="modal"> Cancel</a>
					<button class="btn btn-primary" type="submit" name="btnsubmit">Send</button>
				</div>
		  </form>
			

		</div>
	</div> 
</div>





<script src="js/jquery.js"></script>
<script src="js/code.js"></script>
<script src="js/jquery-ui/jquery-ui.min.js"></script>



</body>
</html>