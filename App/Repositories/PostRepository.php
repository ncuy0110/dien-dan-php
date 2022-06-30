<?php
require_once 'App/Models/post.php';
require_once 'App/Repositories/DB.php';
class PostRepository
{
    public static function createPost($post)
    {
        try {
            $db = DB::getInstance();
            $stmt = $db->prepare('INSERT INTO post (title, content, user_id) values(:title, :content, :user_id)');
            $stmt->bindParam(':title', $post->title);
            $stmt->bindParam(':content', $post->content);
            echo $post->userId;
            $stmt->bindParam(':user_id', $post->userId);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            echo $e;
        }
        return false;
    }

    public static function getAllPost()
    {
        $db = DB::getInstance();
        $stmt = $db->prepare('SELECT
        post.id, post.title, post.content, post.created_at, post.updated_at, user.email FROM post
        INNER JOIN user
        ON post.user_id=user.id');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
