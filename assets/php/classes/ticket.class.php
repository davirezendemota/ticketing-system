<?php

class Ticket extends Db{

    public function getTickets(){
        // SQL COMMAND
        $sql = "SELECT * FROM ticket";
        // CREATING QUERY
        $stmt = $this->connect()->query($sql);
        // LOOP TO SEND EVERY ROW IN TABLE
        while($row = $stmt->fetch()){
            echo "
            <tr>
                <td>#{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['description']}</td>
            </tr>
            ";
        }
    }
}