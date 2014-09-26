<?php


class CommentController extends BaseController {

    public function comment()
    {
        if(Input::get('articleId') AND Input::get('userId') AND Input::get('comment')){
            if(Auth::check()){
                try{
                    $comment = new Comment;
                    $comment->articleId= Input::get('articleId');
                    $comment->userId= Input::get('userId');
                    $comment->comment= Input::get('comment');
                    $comment->save();
                }
                catch(Exception $e){
                    Log::error($e->getMessage());
                }
            }
        }

        $comments = Comment::with('user')
                            ->where('articleId',Input::get('articleId'))
                            ->orderBy('iDate','desc')
                            ->get();
        return View::make('comment.comment',compact('comments'));

    }

} 