<?php
require_once 'Core/View.php';
require_once 'App/Models/user.php';
require_once 'App/Repositories/UserRepository.php';

session_start();
class AuthController {
    public static function getLoginPage() {
        View::renderTemplate('/auth/login.html');
    } 

    public static function login() {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (UserRepository::login($email, $password)) {
            $_SESSION["loggedIn"] = true;
            $_SESSION["email"] = $email;
            header('Location: /');
        }
        else {
            return View::renderTemplate('/auth/login.html', [
                'error' => 'Email or password is incorrect!'
            ]);
        }
    }

    public static function getRegisterPage() {
        View::renderTemplate('/auth/register.html');
    }

    public static function register() {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeatPassword"];

        $user = UserRepository::findByEmail($email);
        if ($user != null) {
            return View::renderTemplate('/auth/register.html', [
                'error' => 'Email đã được sử dụng!'
            ]);
        }

        if ($password != $repeatPassword) {
            return View::renderTemplate('/auth/register.html', [
                'error' => 'Mật khẩu nhập lại không đúng!'
            ]);
        }

        if (UserRepository::register($email, $password))
            header('Location: /login');
        else {
            return View::renderTemplate('/auth/register.html', [
                'error' => 'Đăng ký không thành công!'
            ]);
        }
    }
}