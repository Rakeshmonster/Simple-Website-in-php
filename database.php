<?php
    $fullname = $_POST["Name"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    $con = mysqli_connect("localhost:3308", "root", "", "database")
    or die("Connection failes");

    $duplicate = mysqli_query($con, "SELECT * FROM user_data WHERE Name = '$fullname' OR Email = '$email' ");
    if (mysqli_num_rows($duplicate)>0) {
        echo "<script> alert('Username or Email has Already Taken'); </script>";
    }
    else{
            $sqli = "insert into user_data values('$fullname', '$email', '$password')";
            mysqli_query($con, $sqli);
             echo "<script> alert('Registration Successful'); </script>";
        }

        mysqli_close($con);
?>