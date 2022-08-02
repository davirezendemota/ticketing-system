<?php
    session_start();

    include("connection.php");
    include("functions.php");
    
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <title>Ticketing System - Index</title>
</head>
<body class="flex-row justify-center align-center">
        <section>
            <div class="flex-col align-center">
                <h3>Index</h3>
                <h3>Hello, <?= $user_data['user_name']?></h3>
                <a href="logout.php">Logout</a>
            </div>
        </section>
</body>
</html>