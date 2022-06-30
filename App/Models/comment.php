<?php
class Comment {
    public $id;
    public $content;
    public $userId;
    public $postId;
    public $createdAt;
    public $updatedAt;

    public function __construct($id = null, $content, $userId, $postId, $createdAt = null, $updatedAt = null)
    {
        $this->id = $id;
        $this->content = $content;
        $this->userId = $userId;
        $this->postId = $postId;
        $this->createdAt = $createdAt;
    }
}