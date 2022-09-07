<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <!-- FAVICON  -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- TITLE -->
    <title>Ticketing System - Index</title>
</head>
<body class="flex-col justify-center align-center">
        <div class="flex-col align-center">
            <h3>Index</h3>
            <h3>Hello!</h3>
        </div>
        <br>
        <div class="flex-col align-center">
            <form class="form form__task" method="POST" action="assets/php/ajax.php" enctype="application/x-www-form-urlencoded">
                <input type="text" class="field form__task__name" name="name" placeholder="Task">
                <input type="text" class="field form__task__description" name="description" placeholder="Description">
                <input type="submit" class="form__btn" value="Send">
            </form>
        </div>
</body>
</html>