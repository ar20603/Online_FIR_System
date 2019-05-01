<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Login/css/firstat.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Complaints</title>

	<style type="text/css">
		.complaintscontainer{
			margin-left: 10vw;
			margin-right: 10vw;
			margin-top: 10vh;
		}

		body{
			background-color: #ebebeb;
		}
	</style>
</head>
<body>
	<div class="complaintscontainer">
		<table class="table table-hover table-light">
		  <thead class="thead">
		    <tr>
		      <th scope="col">S.No.</th>
		      <th scope="col">Complaint ID</th>
		      <th scope="col">Name</th>
		      <th scope="col">Age</th>
		      <th scope="col">Address</th>
		      <th scope="col">Date of Incidence</th>
		      <th scope="col">Date of Registration</th>
		      <th scope="col">Complaint</th>
		      <th scope="col">Section</th>
		      <th scope="col">Category</th>
		      <th scope="col">Status</th>
		    </tr>
		  </thead>
		  <tbody>


		    <?php
		    $i =1;
		    $con = mysqli_connect('localhost','root','','complaints');

		    $query = "SELECT * from fir WHERE Approved = NULL";
		    $res = mysqli_query($con,$query);
		    $count = mysqli_num_rows($res);

		    if($count>0)
		    {
		    	while($row = mysqli_fetch_array($res))
		    	{

		    ?>
		    		<tr>
				      <th scope="row"><?php echo $i ?></th>
				      <td><?php echo $row['SNo'] ?></td>
				      <td><?php echo $row['Name'] ?></td>
				      <td><?php echo $row['Age'] ?></td>
				      <td><?php echo $row['Address'] ?></td>
				      <td><?php echo $row['Inc_DateTime'] ?></td>
				      <td><?php echo $row['Reg_DateTime'] ?></td>
				      <td><?php echo $row['Complaint'] ?></td>
				      <td><?php echo $row['Section'] ?></td>
				      <td><?php echo $row['Category'] ?></td>
				      <td>
				      	<form action="approvalASI.php" method="POST" >
				      		<input type="hidden" name="sno" value="<?php echo $row['SNo'] ?>" >
				      		<input type="hidden" name="cat" value="<?php echo $row['Category'] ?>" >
					      	<button type="submit" name="approve" class="btn btn-outline-success">Approve</button>
					      	<button type="submit" name="reject" class="btn btn-outline-danger">Reject</button>
				      	</form>
				      </td>
				    </tr>

			<?php
					$i++;

		    	}
		    }
		    else
		    {
		    	echo "<h2>No pending complaints!</h2>";
		    }

		    $con->close();

		    ?>


		  </tbody>
		</table>
	</div>
	</body>
</html>
