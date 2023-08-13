<?php

$con = mysqli_connect("pdb1046.freehostingeu.com","3537280_incasa","casain01","3537280_incasa");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	include("include/functions.php");
?>