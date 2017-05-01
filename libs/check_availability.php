<?php
	echo $statement= "SELECT `bus_id`, SUM(`seats`) FROM `booking` GROUP BY `bus_id`"; 
	if($statement_query = mysql_query($statement))
	{
		
	}	
?>