<?php


class Ticket extends Db{

    public function getTickets(){
        // SQL COMMAND
        $sql = "SELECT * FROM ticket";
        // CREATING STATEMENT
        $stmt = $this->connect()->query($sql);
        // LOOP TO SEND EVERY ROW IN TABLE
        while($row = $stmt->fetch()){
            echo "
            <tr>
                <td>{$row['title']}</td>
                <td>{$row['description']}</td>
            </tr>
            ";
        }

    }

    public function setTicket($title, $description){
        // SQL COMMAND
        $sql= "INSERT INTO ticket (title, description) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $description]);

        $return['message'] = "Ticket was sent!";
        $return['data'] = "
            <tr>
                <td>{$title}</td>
                <td>{$description}</td>
            </tr>
        ";

        return $return;
    }
}