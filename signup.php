<?php
    session_start();

    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //save to database
            $user_id = ramdom_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        }else{
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <title>Ticketing System - Signup</title>
</head>
<body class="flex-row justify-center align-center">
        <section>
            <div class="flex-col align-center">
                <h3>Signup</h3>
                <form class="form" method="POST">
                    <input type="text" class="field" name="user_name" placeholder="Username" required>
                    <input type="password" class="field" name="password" placeholder="Password" required>

                    <input type="submit" value="Signup">
                    <a href="login.php">Click to Login</a>
                </form>
            </div>
        </section>
</body>
</html>