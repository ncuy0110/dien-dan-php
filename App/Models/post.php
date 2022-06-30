<?php
class Post
{
    public $id;
    public $title;
    public $content;
    public $userId;
    public $createdAt;
    public $updatedAt;

    function __construct(
        $id = null,
        $title = null,
        $content = null,
        $userId = null,
        $createdAt = null,
        $updatedAt = null
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM posts');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Post($item['id'], $item['title'], $item['content']);
        }

        return $list;
    }
}
