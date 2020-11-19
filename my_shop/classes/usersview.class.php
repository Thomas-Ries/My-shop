<?php

class UsersView extends Users {
    
    public function showName($id) {
        $results = $this->getUsers($id);
        echo $results['username'];
    }
    // protected function showPassword($id) {
    //     $results = $this->getUsers($id);
    //       echo $results['password'];
    // }
    public function showEmail($id) {
        $results = $this->getUsers($id);
        echo $results['email'];
    }
    public function showAdmin($id) {
        $results = $this->getUsers($id);
        echo $results['admin'];
    }

}