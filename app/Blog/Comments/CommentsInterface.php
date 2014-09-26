<?php namespace Blog\Comments;


interface CommentsInterface {
    public function addComment($param);
    public function getComment($articleId);
} 