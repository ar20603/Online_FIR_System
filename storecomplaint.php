<?php
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$con = mysqli_connect('localhost','root','','complaints');
		$name = $_POST['name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$incDT = $_POST['incDT'];
		$typeComplaint = $_POST['typeComplaint'];


		$sql = "insert into fir (Name,Age,Address,Inc_DateTime,Reg_DateTime,Complaint,Section,Category) VALUES ('$name','$age','$address','$incDT',now(),'$typeComplaint','$typeComplaint','$typeComplaint')";

		$result = $con->query($sql); 

		$con->close();
	}
	else {
		echo "<h1>Error 404</h1>";
		//header("Location: http://www.yourwebsite.com/user.php"); /* Redirect browser */
		//exit();
	}
	
?>