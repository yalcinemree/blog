<?php

use Blog\Comments\CommentsInterface;

class CommentController extends BaseController {
    private $comments;

    function __construct(CommentsInterface $comments)
    {
        $this->comments = $comments;
    }

    public function comment()
    {
        if(Input::get('articleId') AND Input::get('userId') AND Input::get('comment')){
            if(Auth::check()){
                try{
                    $values["articleId"] = Input::get('articleId');
                    $values["userId"] = Input::get('userId');
                    $values["comment"] = Input::get('comment');

                    $this->comments->addComment($values);
                }
                catch(Exception $e){
                    Log::error($e->getMessage());
                }
            }
        }

        try{
            $comments = $this->comments->getComment(Input::get('articleId'));
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }

        return View::make('comment.comment',compact('comments'));

    }

} 