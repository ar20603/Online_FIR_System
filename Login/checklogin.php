<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $con = mysqli_connect('localhost','root','','complaints');

        $sql = "SELECT * from cops WHERE Email='$email' and Password = '$password'";
        $result = $con->query($sql);

        if ($result->num_rows > 0)
        {
            session_start();
            $row = mysqli_fetch_array($res);
            if($row['Post']=="ASI")
            {
                $_SESSION['email'] = $email;
                $_SESSION['post'] = "ASI";
                window.location="../displaycomplaints.php";
            }
            else if($row['Post']=="SI")
            {
                $_SESSION['email'] = $email;
                $_SESSION['post'] = "SI";
                window.location="../displaycomplaints.php";
            }
        }
        else
        {
            window.location="login.html";
            alert(“Wrong user name or password”);
        }
    }

 ?>
