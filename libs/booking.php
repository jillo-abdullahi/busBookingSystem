<?php require 'nucleus.php'; ?>
<?php
if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['departure-date']) && isset($_POST['trip-type']) && isset($_POST['fare']))
{
	$from = $_POST['from'];
	$to = $_POST['to'];
	$departure_date = $_POST['departure-date'];
	$trip_type = $_POST['trip-type'];
	$fare = $_POST['fare'];

	$booking_details = "INSERT INTO `booking` (`booking_id`,`from`,`to`,`date`,`trip_type`,`fare`,`booked`) VALUES(NULL,'{$from}','{$to}','{$departure_date}','{$trip_type}',{$fare},0)";
	if($booking_details_query = mysql_query($booking_details))
	{
		echo mysql_insert_id();
		require 'check_availability.php';
	}else{

		echo 'Erro Please try again';
	}
}
?>