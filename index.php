<?php include 'assets/php/includes/class-autoload.inc.php' ?>
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
    <body>
        <header class="header">
            <h3 class="header__title">Ticketing System</h3>
        </header>
        <main class="main">
            <div class="container__ticket">
                <form class="form" method="POST" action="">
                    <input name="title" type="text" class="field"  placeholder="Ticket name...">
                    <input name="description" type="text" class="field" placeholder="Ticket description...">
                    <input type="submit" class="form__btn" value="Submit">
                </form>
                <div class="group__ticket">
                    <table class="ticket__table">
                        <thead>
                            <th>ID</td>
                            <th>Name</td>
                            <th>Description</td>
                        </thead>
                        <tbody>
                            <?php
                                $ticket = new Ticket();
                                $ticket->getTickets();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>