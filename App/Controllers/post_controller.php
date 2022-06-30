<?php
require_once 'Core/View.php';
require_once 'App/Repositories/UserRepository.php';
require_once 'App/Repositories/PostRepository.php';

class PostController
{
    public static function getCreatePage()
    {
        if ($_SESSION['loggedIn'] == true)
            return View::renderTemplate('/post/create.html');
        else
            header('Location: /login');
    }

    public static function createPost()
    {
        $email = $_SESSION['email'];
        $user = UserRepository::findByEmail($email);
        if ($user == null) {
            header('Location: /login');
            return;
        }
        $title = $_POST['title'];
        $content = $_POST['content'];

        if (PostRepository::createPost(new Post(null, $title, $content, $user->id))) {
            header('Location: /');
        }
    }

    public static function getAll()
    {
        if (!$_SESSION['loggedIn'])
            header('Location: /login');
        $posts = PostRepository::getAllPost();

        return View::renderTemplate('/post/index.html', [
            'posts' => $posts
        ]);
    }
}
