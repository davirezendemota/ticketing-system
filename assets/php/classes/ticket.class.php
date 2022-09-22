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
            <tr data-id=\"{$row['id']}\">
                <td>{$row['title']}</td>
                <td>{$row['description']}</td>
                <td><i class=\"ticket__item_delete fa-solid fa-trash-can\"></i></td>
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
        $return['data'] = '
            <tr>
                <td>'.$title.'</td>
                <td>'.$description.'</td>
                <td><i class="ticket__item_delete fa-solid fa-trash-can"></i></td>
            </tr>
        ';

        return $return;
    }

    public function deleteTicket($id){
        //SQL COMMAND

        $sql= "DELETE FROM ticket WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        $return['message'] = "Ticket was deleted!";

        return $return;
    }
}