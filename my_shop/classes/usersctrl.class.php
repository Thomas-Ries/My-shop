<?php

class UsersCtrl extends Users {

    // public function setUsername($i) {
    //     $results = $this->setUsers('username', $i);
    // }
    // protected function setPassword($i) {
    //     $results = $this->setUsers('password', $i);
    // }
    // public function setEmail($i) {
    //     $results = $this->setUsers('email', $i);
    // }
    // public function setAdmin($i) {s
    //     $results = $this->setUsers('admin', $i);
    // }

    public function newUser($user, $pwd, $email) {
        $mail = filter_var($email, FILTER_SANITIZE_EMAIL);
        switch ($user && $pwd && $mail) {
            case (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+.{7,}\W+$/" ,$pwd));
                throw new Exception("Votre mot de passe doit contenir au minimum 8 caractères, une majuscule et un chiffre");
            break;

            case (!filter_var($mail, FILTER_VALIDATE_EMAIL)): 
                throw new Exception("Votre email n'est pas valide");
            break;

            case (mysql_num_rows($this->checkEmail($mail))) :
                throw new Exception("L'adresse email existe déjà");
            break;

            default:
            $this->createUsers( (string) htmlspecialchars($user), password_hash($pwd, PASSWORD_BCRYPT), $mail);
            break;
    }
    }
}