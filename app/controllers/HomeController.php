<?php

use Blog\Articles;

class HomeController extends BaseController {
    private $articles;

    function __construct(Articles $articles)
    {
        $this->articles = $articles;
    }

	public function home()
    {
        try{
            $page_limit = 2;
            $page = Input::get('page');
            $article_count = Article::count();
            $total_page = ceil($article_count / $page_limit);

            if($page > $total_page){
                $page = $total_page;
            }
            elseif($page < 1){
                $page = 1;
            }

            if(!Cache::has('article_'.$page)){
                $articles = $this->articles->articleList($page, $page_limit);
                Cache::put('article_'.$page, $articles, 1);
            }
            else{
                $articles = Cache::get('article_'.$page);
            }
        }
        catch(Exception $e){
            Log::error($e->getMessage());
        }

        return View::make('article.articlelist', compact('articles','page','total_page'));
    }

}
