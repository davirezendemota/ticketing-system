<?php 

include 'assets/php/includes/class-autoload.inc.php';

// Objects
$ticket = new Ticket();


if($_POST['funcao'] == 'setTicket'){
    $return = $ticket->setTicket($_POST['title'], $_POST['description']);
}

echo json_encode($return);
