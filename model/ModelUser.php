<?php
class ModelUser {
    public static function getUsers() : array {
        $db = new PDO('mysql:host=localhost;dbname=mangatheque', 'root');
        $query = $db->query('SELECT id, pseudo, email, password FROM user');

        $arrayUser = [];
        while($user = $query->fetch(PDO::FETCH_ASSOC)){
            $arrayUser[] = new User($user['id'], $user['pseudo'], $user['email'], $user['password']);
        }

        return $arrayUser; 
    }
}