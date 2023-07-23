<?php

$con = mysqli_connect("titan","incasa","casain","developers");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>