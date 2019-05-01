 <!DOCTYPE html>
 <html>
 <head>
 	<!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 	<title>Complaints</title>

 	<style type="text/css">
 		.complaintscontainer{
 			margin-left: 10vw;
 			margin-right: 10vw;
 			margin-top: 10vh;
 		}
 	</style>
 </head>
 <body>
 	<div class="complaintscontainer">
 		<table class="table table-hover">
 		  <thead class="thead-light">
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
          <th scope="col">Action</th>
 		    </tr>
 		  </thead>
 		  <tbody>


        <?php

            session_start();
            if( isset( $_SESSION['email'] ) ) {
                    $si_email = $_SESSION['email'];
               }else {
                   echo '<script>
                   window.location="login.html";
                   </script>';
               }
          //
          // $si_email = $_SESSION['email'];
          $con = mysqli_connect('localhost','root','','complaints');

          if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
          }

          echo $si_email;
          $sql = "select * from cops where Email='$si_email'";
          $result = $con->query($sql);
          $cid = 0;
          if($result->num_rows > 0)
  		    {
  		    	$row = mysqli_fetch_array($result);
                $cid = $row['id'];
            }

          $con->close();
          $i =1;
          $con = mysqli_connect('localhost','root','','complaints');

          $sql = "select * from fir where SIID = '$cid'";
          $result = $con->query($sql);

          if($result->num_rows > 0)
  		    {
  		    	while($row = mysqli_fetch_array($result))
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
				      	<form action="siupdatestatus.php" method="POST" >
                  <textarea name="comment"><?php echo $row['Status'] ?></textarea>
                  <input type="hidden" name="sno" value="<?php echo $row['SNo'] ?>" >
                  <input type="hidden" name="cid" value="<?php echo $cid ?>" >
					      	<button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
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
