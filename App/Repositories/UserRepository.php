<?php
require_once 'App/Repositories/DB.php';
class UserRepository extends DB{
    public function getByEmail($email) {

    }

    public static function register($email, $password)
    {
        try {
            $hashed = hash('sha256', (string)$password);
            $db = DB::getInstance();
            $stmt = $db->prepare('INSERT INTO user(email, password) values(:email, :password)');
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed);
            $stmt->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e;
            return false;
        }
        return true;
    }

    public static function findByEmail($email)
    {
        $db = DB::getInstance();
        $stmt = $db->prepare('SELECT * FROM user where email=:email LIMIT 1');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }

    public static function login($email, $password)
    {
        $user = self::findByEmail($email);
        if (!$user) 
            return false;
        return $user[2]== hash('sha256', (string)$password);
    }
}