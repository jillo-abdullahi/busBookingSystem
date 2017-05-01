<!DOCTYPE html>
<html>
<head>
	<title>Select your Seats</title>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

	
</head>
<body>

<script type="text/javascript">
			$(document).ready(function(){

				$('#numberOfSeats').change(function(){
				alert("yippy");

					});
			});

</script>

 

<!--navbar main-->
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
				
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="#contact" data-toggle= "modal">Contact Us</a></li>
				<li><a href="adminSignIn.php">Administrator</a></li>
				<li><a href="help.php">Help</a></li>
			</ul>
		</div>
	</div>

</div>
<!--main navbar-->

<!-- Main jumbotron -->
 <div class="container" >
    <div class="jumbotron" id="topjumbotron">
      <div class="container">
        <h1>Moyale Raha</h1>
        <p>Your one stop online bus reservation service.</p>
      </div>
    </div>
    </div> <!--jumbotron ends here-->

    <!--bus seats-->
 <div class="container">
<div class="jumbotron" id="middlejumbotronDetails">

<div class="container">
	<div class="col-lg-8">
			<div class="well" id="bus_seats_layout" >
					<table cellspacing = "1" id="seatstable">

						<tr>
								<td colspan="2" rowspan="3" ></td>
								<td>&nbsp;7<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>10<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>15<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>20<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>25<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>30<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>35<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>40<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>45<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>50<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>55<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>61<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
						</tr>
						<tr>
								<td>6<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>9<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>14<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>19<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>24<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>29<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>34<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>39<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>44<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>49<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>54<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>60<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
						
						</tr>

						<tr>
								<td>5<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>8<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>13<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>18<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>23<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>28<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>33<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>38<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>43<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>48<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>53<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>59<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
						</tr>

						<tr>
								<td colspan="13" rowspan="2"></td>
								<td rowspan="2">58<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
						</tr>

						<tr>
						
						</tr>

						<tr>
								<td>&nbsp;2<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>4<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td colspan="2" rowspan="2"></td>
								<td>12<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>17<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>22<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>27<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>32<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>37<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>42<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>47<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>52<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>57<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
						</tr>

						<tr>
								<td>1<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>3.<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>11<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>16<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>21<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>26<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>31<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>36<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>41<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>46<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>51<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
								<td>56<img id = "seatimg" src="images/seatsLayout/seat_available.png"></td>
						</tr>


					</table>

					
			</div>
			

			<
			<?php //require 'libs/booking.php';?>
		

			
			

		
	</div>
	<div class="col-lg-4">
			<div class="container">
			<div class="well" id="custSpecsContainer">
			<table cellpadding="5" cellspacing="5">
						
					<tr>
						
						<td><img src="images/seatsLayout/seat_available.png"></td>
						<td>&nbsp;Available &nbsp;seat.</td>
						<td>&nbsp;&nbsp;</td>
						<td><img src="images/seatsLayout/seat_booked.png"></td>
						<td>&nbsp;Reserved &nbsp;seat.</td>
					</tr>
			</table>
			<h4><b><u>Select your seat(s). Use the layout on the left as a guide to the position of the seat.</u></b></h4>
			
			<form class="form-horizontal" id="detailsform" method="post" action="personalDetails.php" >


		
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-3 control-label" >No.of seats:</label>
				
						<div class="col-lg-9">
							<select class="form-control" id="numberOfSeats" name="from" style="width:200px; height:35px">
											<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
									</select>
						</div>
				</div>
			
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-3 control-label" >Seat(s):</label>
						<div class="col-lg-9">
							
								<input type="text" class="form-control col-lg-3" id="seatOne" style="width:50px; height:35px">
								<input type="text" class="form-control col-lg-3" id="seatTwo" style="width:50px; height:35px">
								<input type="text" class="form-control col-lg-3" id="seatThree" style="width:50px; height:35px">
								<input type="text" class="form-control col-lg-3" id="seatFour" style="width:50px; height:35px">
					
						</div>
								
						</div>	
								
				<div class="form-group" >
							<label for="source" class="col-lg-4 control-label"></label>
								<div class="col-lg-8">
									<p>
										<input type="submit" class="btn btn-primary btn-lg pull-right" role="button" 
										 id="submitAndProceed" value="Fill in your personal Details &raquo;"/>
									</p>
													
								</div>
				</div>	
				
			</form>

			<form action="index.php">
					<p>
						<input type="submit" class="btn btn-primary btn-lg pull-right" role="button" 
						id="Startover" style ="width: 277px;"value="Start over"/>
					</p>
			</form>
				
			</div>


			
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
		<form class="form-horizontal" method="post" action="create.php">
			<div class="modal-header">
				<h4>Contact Moyale Raha</h4>

			</div>
			<div class="modal-body">
				<div class="form-group">
				
					<label for="contact-name" class="col-lg-2 control-label" >Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" name="name" placeholder="Full Name">
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
					<button class="btn btn-primary" type="submit" name="submit">Send</button>
				</div>
			</form>
		</div>
	</div> 
</div>

<script src="js/code.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>