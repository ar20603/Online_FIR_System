<?php
	if(isset($_POST['approve']))
	{ 
		$sno = $_POST['sno'];
		$con = mysqli_connect('localhost','root','','complaints');

	    $query = "UPDATE fir set Approved = True WHERE SNo = '$sno'";
	    $result = $con->query($query); 

	    $con->close();
	}

	else if(isset($_POST['reject']))
	{
		$sno = $_POST['sno'];
		$con = mysqli_connect('localhost','root','','complaints');

	    $query = "DELETE from fir WHERE SNo = '$sno'";
	    $result = $con->query($query); 

	    $con->close();
	}

	else {
		echo "<h2>Error 404</h2>";
	}
?>