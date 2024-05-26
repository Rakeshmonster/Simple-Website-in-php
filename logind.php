<?php
  if (!empty($_SESSION['id'])) {
    header("Location: output.php");
}
session_start();
$con = mysqli_connect("localhost:3308", "root", "", "database");
    if (isset($_POST["submit"])) {
        $nameemail = $_POST["nameemail"];
        $pass = $_POST["cpassword"];
        $result = mysqli_query($con, "SELECT * FROM user_data WHERE Name = '$nameemail' OR Email = '$nameemail'");
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            if ($pass != $row["Password"]) {
                $_SESSION["login"]= true;
                $_SESSION["id"]= $row["id"];
                header("Location: output.php");

            }else{
               
                echo "<script> alert('Wrong Password'); </script>";
            }
        }
        else {
            echo "<script> alert('User Not Registered'); </script>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>output page</title>
    </head>
    <body>
         <h1> Welcome </h1>
         <a href="web.php">font Page</a>
    </body>
    </html>