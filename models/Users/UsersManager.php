<?php

namespace App\Users;
use App\Managers;

class UsersManager extends \App\Managers\Manager {

    public function createUser($user, $password) {
        $q = $this->dbConnect()->prepare('INSERT INTO users (user_login, user_password) VALUES (:user_login, :user_password)');
        $q->execute(array(
            'user_login' => $user,
            'user_password' => password_hash($password, PASSWORD_DEFAULT)));
    }

    public function doesUserExist($user) {
        $q = $this->dbConnect()->prepare('SELECT user_login FROM users WHERE user_login = ?');
        $q->execute(array($user));
        if ($response = $q->fetch(\PDO::FETCH_ASSOC)) {
            return true;
        } else {
            return false;
          }
    }

    public function logUser($user, $password) {
        $q = $this->dbConnect()->prepare('SELECT user_login, user_password FROM users WHERE user_login = :user_login');
        $q->execute(array(
            'user_login' => $user));
        $response = $q->fetch(\PDO::FETCH_ASSOC);
        $validPassword = password_verify($password, $response['user_password']);
        return $validPassword;
    }
}