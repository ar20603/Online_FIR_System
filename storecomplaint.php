<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$con = mysqli_connect('localhost','root','','complaints');
		$name = $_POST['name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$incDT = $_POST['incDT'];
		$typeComplaint = $_POST['typeComplaint'];
		$section = "";
		$category = "";
		switch ($typeComplaint) {
			case 'Attempt to Murder':
				$section = "344";
				$category = "Murder";
				break;

			case 'Theft':
				$section = "304";
				$category = "Theft & Robbery";
				break;

			case 'Domestic Violence':
				$section = "304";
				$category = "Domestic Affairs";
				break;

			default:
				$section = "999";
				$category = "Others";
				break;
		}

		$sql = "insert into fir (Name,Age,Address,Inc_DateTime,Reg_DateTime,Complaint,Section,Category) VALUES ('$name','$age','$address','$incDT',now(),'$typeComplaint','$section','$category')";
		$result = $con->query($sql);
		$con->close();
		$message = "Complaint Registered";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo '<script>
		window.location="index.html";
		</script>';
	}
	else {
		echo '<script>
		window.location="registercomplaint.php";
		</script>';
	}

?>
