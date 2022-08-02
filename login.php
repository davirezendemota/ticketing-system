<?php

use LDAP\Result;

    session_start();

    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];


        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);
            
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] == $password){

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "Incorret credentials!";
        }else{
            echo "Incorret credentials!";
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
    <title>Ticketing System - Login</title>
</head>
<body class="flex-row justify-center align-center">
        <section>
            <div class="flex-col align-center">
                <h3>Login</h3>
                <form class="form" method="POST">
                    <input type="text" class="field" name="user_name" placeholder="Username" required>
                    <input type="password" class="field" name="password" placeholder="Password" required>

                    <input type="submit" value="Login">
                    <a href="signup.php">Click to Signup</a>
                </form>
            </div>
        </section>
</body>
</html>