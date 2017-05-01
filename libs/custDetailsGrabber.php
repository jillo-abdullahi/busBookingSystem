<?php
include 'connect.php';

			
?>
<?php

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$phonenumber = $_POST['phonenumber'];
			$email = $_POST['email'];

if( ($firstname != "") && ($lastname!="") && ($gender!="") && ($phonenumber!="") && ($email!=""))
		{

			$enterDetails =  "INSERT INTO `passenger` (`pass_id`,`firstname`,`lastname`,`gender`,`phonenumber`,`email`) 
			VALUES(NULL,'$firstname','$lastname','$gender','$phonenumber','$email')";

			if($cust_details_query = mysql_query($enterDetails))
			{

				echo "Success!";
			}
			else{

				echo "fail!";

				}
					

		}
		else
				echo "error";

?>