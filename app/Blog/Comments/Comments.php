<?php namespace Blog\Comments;

use Comment;

class Comments implements CommentsInterface {

    public function addComment($param)
    {
        try{
            $comment = new Comment;
            $comment->articleId = $param['articleId'];
            $comment->userId = $param['userId'];
            $comment->comment = $param['comment'];
            $inserted = $comment->save();

            if($inserted){
                return true;
            }
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }
        return false;
    }

    public function getComment($articleId)
    {
        try{
            $comments = Comment::with('user')
                ->where('articleId', $articleId)
                ->orderBy('iDate','desc')
                ->get();
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }
        return $comments;
    }
}