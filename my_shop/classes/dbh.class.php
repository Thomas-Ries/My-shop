<?php

class Dbh {
    private $host = "localhost";
    private $user = "cactusAdmin";
    private $pwd = "Montecactus67!";
    private $dbName = "cactus";


    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName; 
        $pdo = new PDO($dsn, $this->user, $this->pwd );
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}
