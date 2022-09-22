<?php 

/* includes */
include '../../assets/php/classes/db.class.php';
include '../../assets/php/classes/ticket.class.php';
/* includes */

/* objects */
$ticket = new Ticket();
/* objects */


if($_POST['funcao'] == 'setTicket'){
    $return = $ticket->setTicket($_POST['title'], $_POST['description']);
}

if($_POST['funcao'] == 'deleteTicket'){
    $return = $ticket->deleteTicket($_POST['id']);
}

echo json_encode($return);
