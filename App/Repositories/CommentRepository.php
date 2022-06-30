<?php
require_once 'App/Models/comment.php';
require_once 'App/Repositories/DB.php';

class CommentRepository
{
    public static function getAllByPost($postId)
    {
        try {
            $stmt = DB::prepare('SELECT comment.id, comment.content, comment.created_at, user.email 
                FROM comment
                INNER JOIN user ON comment.user_id=user.id
                where comment.post_id=:postId');
            $stmt->bindParam(':postId', $postId);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e;
            return null;
        }
    }

    public static function createComment($comment)
    {
        try {
            $db = DB::getInstance();
            $stmt = $db->prepare('INSERT INTO comment(content, user_id, post_id)
                values(:content, :user_id, :post_id)');
            $stmt->bindParam(':content', $comment->content);
            $stmt->bindParam(':user_id', $comment->userId);
            $stmt->bindParam(':post_id', $comment->postId);

            $stmt->execute();
            return self::getCommentById($db->lastInsertId());
        } catch (Exception $e) {
            echo $e;
            return null;
        }
    }

    public static function getCommentById($id) {
        $stmt =  DB::prepare('SELECT comment.id, comment.content, comment.created_at, user.email 
        FROM comment
        INNER JOIN user ON comment.user_id=user.id
        where comment.id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
