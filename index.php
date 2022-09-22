<?php 
    /* includes */
    include 'assets/php/classes/db.class.php';
    include 'assets/php/classes/ticket.class.php';
    /* includes */
    
    $ticket = new Ticket();
?>
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
                <form class="form form__ticket" method="POST" action="">
                    <input name="title" type="text" class="field form__ticket__name"  placeholder="Ticket name...">
                    <input name="description" type="text" class="field form__ticket__desc" placeholder="Ticket description...">
                    <input type="submit" class="form__ticket__btn" value="Submit">
                </form>
                <div class="group__ticket">
                    <table class="ticket__table">
                        <thead>
                            <th>Name</td>
                            <th>Description</td>
                        </thead>
                        <tbody class="ticket__table__body"><?= $ticket->getTickets() ?></tbody>
                    </table>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>