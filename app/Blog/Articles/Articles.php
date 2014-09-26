<?php namespace Blog\Articles;

use Article;
use Auth;

class Articles implements ArticlesInterface {

    public function addArticle($param)
    {
        try{
            $article = new Article;
            $article->title = $param['title'];
            $article->text = $param['text'];
            $article->userId = Auth::id();
            $inserted = $article->save();

            if($inserted){
                return true;
            }
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }

        return false;
    }

    public function getArticle($articleId)
    {
        try{
            $article = Article::with('user')
                                ->with('comment.user')
                                ->with(
                                    ['comment' => function($query){
                                            $query->orderBy('comment.iDate','desc');
                                        }
                                    ]
                                )
                                ->where('id','=', $articleId)->first();
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }
        return $article;
    }

    public function articleList($page, $page_limit)
    {
        try{
            return Article::with('user')->orderBy('iDate','desc')->skip($page*$page_limit)->take($page_limit)->get()->toArray();
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }
    }
}