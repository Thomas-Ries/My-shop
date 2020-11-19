<?php

class Users extends Dbh {

    protected function getUsers($id) {
        $sql = "SELECT * FROM users WHERE id = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetch();
        return $results;

    }

    // protected function setUsers($column, $value ) {
    //     $sql = "UPDATE users set ? = ?";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$column][$value]);
    // }


    //  AJOUTER DATE DE CREATION DU COMPTE
    //  AJOUTER COMPTE ACTIF OU NON

    protected function createUsers($user, $password, $email) {
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        // $stmt->execute(array(':username' => $user, ':password' => $password, ':email' => $email,':admin' => $admin));
        $stmt->execute(array($user, $password, $email));
    }

    protected function checkEmail($email) {
        $sql = "SELECT email FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        }

    }