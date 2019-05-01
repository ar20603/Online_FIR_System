<?php
	if(isset($_POST['submit']))
	{
		$sno = $_POST['sno'];
		$stat = $_POST['comment'];
		$con = mysqli_connect('localhost','root','','complaints');

	    $query = "UPDATE fir set Status = $stat WHERE SNo = '$sno'";
	    $result = $con->query($query);

	    $con->close();
	}

	else {
		echo "<h2>Error 404</h2>";
	}
?>
