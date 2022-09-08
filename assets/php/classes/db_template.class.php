<?php 

class Db {
    // PRIVATE DATABASE CREDENTIALS
    private $host = "";
    private $databaseName = "";
    private $username = "";
    private $password = "";

    protected function connect(){
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->databaseName}";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //echo '<div data-status="on" class="cnx-status">Connection Successful</div>';
            return $pdo;
        }catch (PDOException $err){
            echo '<div data-status="off" class="cnx-status">DB Connection Failed:' . $err->getMessage() . '</div>';
        }
    }
}