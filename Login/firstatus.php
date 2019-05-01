<html>
<head></head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $fir_no = $_POST['fir_no'];

        $con = mysqli_connect('localhost','root','','complaints');

        $sql = "SELECT * from fir WHERE SNo='$fir_no'";
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
            $row = mysqli_fetch_array($result);
            $fno = $row['SNo'];
            $name = $row['Name'];
            $age = $row['Age'];
            $address = $row['Address'];
            $incdate = $row['Inc_DateTime'];
            $regdate = $row['Reg_DateTime'];
            $complaint = $row['Complaint'];
            $section = $row['Section'];
            $category = $row['Category'];
            $approved = $row['Approved'];
            $siid = $row['SIID'];
            $stat = $row['Status'];
?>
<link rel="stylesheet" href="css/firstat.css">
<div class="card">
 <h1><?php echo $row['Name']?></h1>
 <p class="title">FIR No. <?php echo $row['SNo']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Address <?php echo $row['Address']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>Age <?php echo $row['Age']?></p>
 <p>
   <form action="../firgenerator.php" method="POST">
    <input type="hidden" name="sno" value="<?php echo $row['SNo'] ?>" >
    <button type="submit" name="dfir">Download FIR</button>
  </form>
</p>
</div>


<?php
        }
        else
        {
            $message = "No such FIR exists";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>
            window.location="firlogin.html";
            </script>';
        }
    }

 ?>
 </html>
</body>
