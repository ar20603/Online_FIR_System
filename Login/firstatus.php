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
            echo $row['SNo'];
            echo $row['Name'];
            echo $row['Age'];
            echo $row['Address'];
            echo $row['Inc_DateTime'];
            echo $row['Reg_DateTime'];
            echo $row['Complaint'];
            echo $row['Section'];
            echo $row['Category'];
            echo $row['Approved'];
            echo $row['SIID'];
            echo $row['Status'];

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
