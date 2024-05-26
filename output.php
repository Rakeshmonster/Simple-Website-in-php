<?php

    session_start();
     $con = mysqli_connect("localhost:3308", "root", "", "database");
    if (!empty($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $result = mysqli_query($con, "SELECT * FROM user_data WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

    }
    else {
        header("Location: logind.php");
    }

?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output page</title>
</head>
<body>
     <h1> Welcome <?php echo $row["Name"]; ?></h1>
     <a href="web.php">font Page</a>
</body>
</html>