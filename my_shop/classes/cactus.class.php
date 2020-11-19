<?php

// include_once ('dbh.class.php');

class Cactus extends Dbh {

    protected function getCactuses($id) {
        $sql = "SELECT * FROM stock WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetch();
        return $results;

    }
}