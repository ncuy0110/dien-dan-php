<?php
require_once 'App/Repositories/UserRepository.php';
require_once 'App/Models/comment.php';
require_once 'App/Repositories/CommentRepository.php';
class CommentController
{
    public static function createComment()
    {
        $data = $_POST['data'];

        $user = UserRepository::findByEmail($_SESSION['email']);
        if (!$_SESSION['loggedIn'] || $user == null)
            header('Location: /login');
        $content = $data['content'];
        $postId = $data['postId'];

        header('Content-Type: application/json');
        $comment = new Comment(null, $content, $user->id, $postId);
        $rs = CommentRepository::createComment($comment);
        if ($rs != null) {
            echo json_encode([ 'message' => true, 'comment' => $rs]);
        } else {
            echo json_encode(['message' => false]);
        }
    }

    public static function getAll($postId)
    {
        $comments = CommentRepository::getAllByPost($postId);
        header('Content-Type: application/json');
        echo json_encode($comments);
    }
}
